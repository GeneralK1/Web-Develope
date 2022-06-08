PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryStr: STRING;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  StartPos, FinishPos: INTEGER;
BEGIN
  StartPos := POS(Key, QueryStr);
  FinishPos := POS('&', QueryStr);
  IF COPY(QueryStr, FinishPos, 1) = '&'
  THEN
    GetQueryStringParameter := COPY(QueryStr, StartPos + LENGTH(Key) + 1, FinishPos - LENGTH(Key) - StartPos  - 1)
  ELSE
    GetQueryStringParameter := COPY(QueryStr, StartPos + LENGTH(Key) + 1);
  DELETE(QueryStr, FinishPos, 1)
END;
BEGIN
  QueryStr := GetEnv('QUERY_STRING');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'));
END.



