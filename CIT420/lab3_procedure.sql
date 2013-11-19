CREATE OR REPLACE PROCEDURE lab3_procedure
( pv_input VARCHAR2 ) IS
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
			dbms_output.put_line(lv_target);
		ELSE
			dbms_output.put_line('Hello World!');
		END IF;	
	END;
END;
/
 
SET SERVEROUTPUT ON SIZE UNLIMITED
BEGIN
  lab3_procedure('&input');
END;
/