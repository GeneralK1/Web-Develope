PROGRAM WriteName(INPUT, OUTPUT);
USES
  DOS;
VAR
  Position: INTEGER;
  Name: STRING;
BEGIN{WriteName}
  WRITELN;
  Position := POS('name=', GetEnv('QUERY_STRING'));
  IF (GetEnv('QUERY_STRING') = '') OR (GetEnv('QUERY_STRING') = 'name=')
  THEN
    WRITELN('Hello, Anonymus!');
  Name := COPY(GetEnv('QUERY_STRING'), Position + 5);
  IF COPY(GetEnv('QUERY_STRING'), 1, 5) = 'name='
  THEN
    IF Name <> ''
    THEN
      WRITELN('Hello, dear ', Name, '!')
END.{WriteName}
