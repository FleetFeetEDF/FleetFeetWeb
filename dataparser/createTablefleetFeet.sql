DROP TABLE IF EXISTS fleetfeet;
CREATE TABLE fleetfeet (
  table_key  VARCHAR(100) PRIMARY KEY,
  user_id    VARCHAR(50)                 NOT NULL,
  begin_time TIMESTAMP WITHOUT TIME ZONE NOT NULL,
  end_time   TIMESTAMP WITHOUT TIME ZONE NOT NULL,
  location   POINT                       NOT NULL,
  avg_ch4    VARCHAR(50),
  avg_wind   VARCHAR(50),
  comp_alg   INT,
  checksum   VARCHAR(50),
  data_blob  BYTEA
);