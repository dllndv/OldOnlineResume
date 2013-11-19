CREATE OR REPLACE FUNCTION lab3_function
( pv_input VARCHAR2 ) RETURN VARCHAR2 IS
  lv_target VARCHAR2(20);
BEGIN
	DECLARE
		lv_input VARCHAR2(32767);
		lv_length CONSTANT NUMBER := 5;
		lv_min CONSTANT NUMBER := 0;
	BEGIN
		lv_input := pv_input;
		IF (NVL(LENGTH(lv_input), 0) <= lv_length) AND (NVL(LENGTH(lv_input), 0) > lv_min) THEN
			lv_target := 'Hello '||lv_input||'!';
		ELSE
			lv_target := 'Hello World!';
		END IF;	
	END;
  	RETURN lv_target;
END;
/
 
SET SERVEROUTPUT ON SIZE UNLIMITED
BEGIN
  dbms_output.put_line(lab3_function('&input'));
END;
/