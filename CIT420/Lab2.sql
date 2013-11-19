-- Opens the buffer door (trap door)
SET SERVEROUTPUT ON SIZE UNLIMITED

BEGIN
	DECLARE
		-- A variable to abstract the input string.
		-- ampersand means substitution variable.
		-- NEVER ASSIGN A DYNAMIC VALUE IN A DECLARE BLOCK!
		lv_input VARCHAR2(32767);
		lv_target VARCHAR2(5);
		lv_length CONSTANT NUMBER := 5;
		lv_min CONSTANT NUMBER := 0;
	BEGIN
		-- Dynamic assignments should always be in the execution block.
		lv_input := '&input';

		IF (NVL(LENGTH(lv_input), 0) <= lv_length) AND (NVL(LENGTH(lv_input), 0) > lv_min) THEN
			lv_target := lv_input;
			-- Print a message form our program.
			-- This is how you debug and you'll need to master it.
			dbms_output.put_line('Hello '||lv_target||'!');
		ELSE
			dbms_output.put_line('Hello World!');
		END IF;	
	END;
END;
/
