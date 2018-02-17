<?php
class ModelLocalisationSnsAddress extends Model {
	public function getProvince($country_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sns_provinces WHERE id = '" . (int)$province_id . "'");

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
}