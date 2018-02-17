<?php
class ModelAccountAddress extends Model {
// THIS FUNCTION 1 IS EDITED
	// added sns columns
	public function addAddress($customer_id, $data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "address SET customer_id = '" . (int)$customer_id . "', firstname = '" . $this->db->escape($data['firstname']) . "', lastname = '" . $this->db->escape($data['lastname']) . "', company = '" . $this->db->escape($data['company']) . "', address_1 = '" . $this->db->escape($data['address_1']) . "', address_2 = '" . $this->db->escape($data['address_2']) . "', postcode = '" . $this->db->escape($data['postcode']) . "', city = '" . $this->db->escape($data['city']) . "', zone_id = '" . (int)$data['zone_id'] . "', country_id = '" . (int)$data['country_id'] . "', sns_province_id = '" . (int)$data['province_id'] . "', sns_regency_id = '" . (int)$data['regency_id'] . "', sns_district_id = '" . (int)$data['district_id'] . "', custom_field = '" . $this->db->escape(isset($data['custom_field']['address']) ? json_encode($data['custom_field']['address']) : '') . "'");

		$address_id = $this->db->getLastId();

		if (!empty($data['default'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET address_id = '" . (int)$address_id . "' WHERE customer_id = '" . (int)$customer_id . "'");
		}

		return $address_id;
	}

// THIS FUNCTION 2 IS EDITED
	// added sns columns
	public function editAddress($address_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "address SET firstname = '" . $this->db->escape($data['firstname']) . "', lastname = '" . $this->db->escape($data['lastname']) . "', company = '" . $this->db->escape($data['company']) . "', address_1 = '" . $this->db->escape($data['address_1']) . "', address_2 = '" . $this->db->escape($data['address_2']) . "', postcode = '" . $this->db->escape($data['postcode']) . "', city = '" . $this->db->escape($data['city']) . "', zone_id = '" . (int)$data['zone_id'] . "', country_id = '" . (int)$data['country_id'] . "', sns_province_id = '" . (int)$data['province_id'] . "', sns_regency_id = '" . (int)$data['regency_id'] . "', sns_district_id = '" . (int)$data['district_id'] . "', custom_field = '" . $this->db->escape(isset($data['custom_field']['address']) ? json_encode($data['custom_field']['address']) : '') . "' WHERE address_id  = '" . (int)$address_id . "' AND customer_id = '" . (int)$this->customer->getId() . "'");

		if (!empty($data['default'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET address_id = '" . (int)$address_id . "' WHERE customer_id = '" . (int)$this->customer->getId() . "'");
		}
	}

	public function deleteAddress($address_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "address WHERE address_id = '" . (int)$address_id . "' AND customer_id = '" . (int)$this->customer->getId() . "'");
	}

// THIS FUNCTION 3 IS EDITED
	// Add query to get province, regency, and district
	public function getAddress($address_id) {
		$address_query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "address WHERE address_id = '" . (int)$address_id . "' AND customer_id = '" . (int)$this->customer->getId() . "'");

		if ($address_query->num_rows) {
			$country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE country_id = '" . (int)$address_query->row['country_id'] . "'");

			if ($country_query->num_rows) {
				$country = $country_query->row['name'];
				$iso_code_2 = $country_query->row['iso_code_2'];
				$iso_code_3 = $country_query->row['iso_code_3'];
				$address_format = $country_query->row['address_format'];
			} else {
				$country = '';
				$iso_code_2 = '';
				$iso_code_3 = '';
				$address_format = '';
			}

			$zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE zone_id = '" . (int)$address_query->row['zone_id'] . "'");

			if ($zone_query->num_rows) {
				$zone = $zone_query->row['name'];
				$zone_code = $zone_query->row['code'];
			} else {
				$zone = '';
				$zone_code = '';
			}

			$province_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "sns_provinces` WHERE province_id = '" . (int)$result['sns_province_id'] . "'");

			if ($province_query->num_rows) {
				$province = $province_query->row['name'];
				$province_id = $province_query->row['province_id'];
			} else {
				$province = '';
				$province_id = '';
			}

			$regency_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "sns_regencies` WHERE regency_id = '" . (int)$result['sns_regency_id'] . "'");

			if ($regency_query->num_rows) {
				$regency = $regency_query->row['name'];
				$regency_id = $regency_query->row['regency_id'];
			} else {
				$regency = '';
				$regency_id = '';
			}

			$district_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "sns_districts` WHERE district_id = '" . (int)$result['sns_district_id'] . "'");

			if ($district_query->num_rows) {
				$district = $district_query->row['name'];
				$district_id = $district_query->row['district_id'];
			} else {
				$district = '';
				$district_id = '';
			}

			$address_data = array(
				'address_id'     => $address_query->row['address_id'],
				'firstname'      => $address_query->row['firstname'],
				'lastname'       => $address_query->row['lastname'],
				'company'        => $address_query->row['company'],
				'address_1'      => $address_query->row['address_1'],
				'address_2'      => $address_query->row['address_2'],
				'postcode'       => $address_query->row['postcode'],
				'city'           => $address_query->row['city'],
				'zone_id'        => $address_query->row['zone_id'],
				'zone'           => $zone,
				'zone_code'      => $zone_code,
				'country_id'     => $address_query->row['country_id'],
				'country'        => $country,
					'province_id'    => $address_query->row['province_id'],
					'province'       => $province,
					'regency_id'     => $address_query->row['regency_id'],
					'regency'        => $regency,
					'district_id'    => $address_query->row['district_id'],
					'district'       => $district,
				'iso_code_2'     => $iso_code_2,
				'iso_code_3'     => $iso_code_3,
				'address_format' => $address_format,
				'custom_field'   => json_decode($address_query->row['custom_field'], true)
			);

			return $address_data;
		} else {
			return false;
		}
	}

// THIS FUNCTION 3 IS EDITED
	// Add query to get province, regency, and district
	public function getAddresses() {
		$address_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "address WHERE customer_id = '" . (int)$this->customer->getId() . "'");

		foreach ($query->rows as $result) {
			$country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE country_id = '" . (int)$result['country_id'] . "'");

			if ($country_query->num_rows) {
				$country = $country_query->row['name'];
				$iso_code_2 = $country_query->row['iso_code_2'];
				$iso_code_3 = $country_query->row['iso_code_3'];
				$address_format = $country_query->row['address_format'];
			} else {
				$country = '';
				$iso_code_2 = '';
				$iso_code_3 = '';
				$address_format = '';
			}

			$zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE zone_id = '" . (int)$result['zone_id'] . "'");

			if ($zone_query->num_rows) {
				$zone = $zone_query->row['name'];
				$zone_code = $zone_query->row['code'];
			} else {
				$zone = '';
				$zone_code = '';
			}

			$province_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "sns_provinces` WHERE province_id = '" . (int)$result['sns_province_id'] . "'");

			if ($province_query->num_rows) {
				$province = $province_query->row['name'];
				$province_id = $province_query->row['province_id'];
			} else {
				$province = '';
				$province_id = '';
			}

			$regency_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "sns_regencies` WHERE regency_id = '" . (int)$result['sns_regency_id'] . "'");

			if ($regency_query->num_rows) {
				$regency = $regency_query->row['name'];
				$regency_id = $regency_query->row['regency_id'];
			} else {
				$regency = '';
				$regency_id = '';
			}

			$district_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "sns_districts` WHERE district_id = '" . (int)$result['sns_district_id'] . "'");

			if ($district_query->num_rows) {
				$district = $district_query->row['name'];
				$district_id = $district_query->row['district_id'];
			} else {
				$district = '';
				$district_id = '';
			}

			$address_data[$result['address_id']] = array(
				'address_id'     => $result['address_id'],
				'firstname'      => $result['firstname'],
				'lastname'       => $result['lastname'],
				'company'        => $result['company'],
				'address_1'      => $result['address_1'],
				'address_2'      => $result['address_2'],
				'postcode'       => $result['postcode'],
				'city'           => $result['city'],
				'zone_id'        => $result['zone_id'],
				'zone'           => $zone,
				'zone_code'      => $zone_code,
				'country_id'     => $result['country_id'],
				'country'        => $country,
					'province_id'    => $result['province_id'],
					'province'       => $province,
					'regency_id'     => $result['regency_id'],
					'regency'        => $regency,
					'district_id'    => $result['district_id'],
					'district'       => $district,
				'iso_code_2'     => $iso_code_2,
				'iso_code_3'     => $iso_code_3,
				'address_format' => $address_format,
				'custom_field'   => json_decode($result['custom_field'], true)

			);
		}

		return $address_data;
	}

	public function getTotalAddresses() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "address WHERE customer_id = '" . (int)$this->customer->getId() . "'");

		return $query->row['total'];
	}
}
