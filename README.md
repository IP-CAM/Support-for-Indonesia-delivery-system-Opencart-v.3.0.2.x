# OpencartIndonesiaAddress
```by Husnulzaki Wibisono Haryadi```

A modified Opencart platform to support Indonesia delivery system.
Support address information of user's province (P), regency (R), and district (D).
Additionally contain database information of villages for possible future development.

## Modification:
- Create tables for provinces, regencies, districts, and villages
- Modify address table to contain province, regency, and district
- Modify address form to dynamically shows province, regency, and district drop down list when Indonesia is selected as country
- Additionally hides and revoke the default zones and city as a required input from the form whenever Indonesia is selected
- Needless to say a localisation model was created to support this modification. However, cache storing on the model is currently disabled
