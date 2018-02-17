<?php
class ModelLocalisationSnsAddress extends Model {
	public function getProvince($province_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sns_provinces WHERE province_id = '" . (int)$province_id . "'");

		return $query->row;
	}

	public function getProvinces() {
		$province_data = $this->cache->get('province.catalog');

		if (!$province_data) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sns_provinces ORDER BY name ASC");

			$province_data = $query->rows;

			$this->cache->set('province.catalog', $province_data);
		}

		return $province_data;
	}

	public function getRegency($regency_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sns_regencies WHERE regency_id = '" . (int)$regency_id . "'");

		return $query->row;
	}

	public function getRegenciesByProvinceId($province_id) {
		$regency_data = $this->cache->get('regency.' . (int)$province_id);

		if (!$regency_data) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sns_regencies WHERE province_id = '" . (int)$province_id . "' ORDER BY name");

			$regency_data = $query->rows;

			$this->cache->set('regency.' . (int)$province_id, $regency_data);
		}

		return $regency_data;
	}
}