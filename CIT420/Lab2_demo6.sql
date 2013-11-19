-- Opens the buffer door (trap door)
SET SERVEROUTPUT ON SIZE 1000000

BEGIN
	DECLARE
		-- A variable to abstract the input string.
		-- ampersand means substitution variable.
		-- NEVER ASSIGN A DYNAMIC VALUE IN A DECLARE BLOCK!
		lv_input VARCHAR2(5);
	BEGIN
		-- Dynamic assignments should always be in the execution block.
		lv_input := '&input';
		-- Print a message form our program.
		-- This is how you debug and you'll need to master it.
		dbms_output.put_line('Hello '||lv_input||'!');
	EXCEPTION
		-- This catches all exceptions
		WHEN OTHERS THEN
			dbms_output.put_line('Hello Inner Block!');
	END;
	/
EXCEPTION
	-- This catches all exceptions
	WHEN OTHERS THEN
		dbms_output.put_line('Hello Outter Block!');
END;
/