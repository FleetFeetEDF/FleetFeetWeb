drop table if exists fleetFeet;	
CREATE TABLE fleetFeet (
	 table_key serial primary key,
	 user_id int,
	 begin_time timestamp without time zone,
	 end_time timestamp without time zone,
	 location point,
	 avg_ch4 real,
	 avg_wind real,
	 comp_alg int,
	 checksum bigint,
	 data_blob bytea);