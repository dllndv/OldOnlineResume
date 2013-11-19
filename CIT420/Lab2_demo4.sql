-- Opens the buffer door (trap door)
SET SERVEROUTPUT ON SIZE 1000000

DECLARE
	-- A variable to abstract the input string.
	-- ampersand means substitution variable.
	lv_input VARCHAR2(5) := '&input';

BEGIN
	-- Print a message form our program.
	-- This is how you debug and you'll need to master it.
	dbms_output.put_line('Hello '||lv_input||'!');
EXCEPTION
	-- This catches all exceptions
	WHEN OTHERS THEN
		dbms_output.put_line('Hello World!');
END;
/