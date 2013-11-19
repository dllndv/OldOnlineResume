-- Opens the buffer door (trap door)
SET SERVEROUTPUT ON SIZE 1000000

BEGIN
	-- Print a message form our program.
	-- This is how you debug and you'll need to master it.
	-- ampersand means substitution variable.
	dbms_output.put_line('Hello '||'&input'||'!');
END;
/