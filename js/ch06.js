function filter(){
  let input = document.getElementsByName('xss')[0].value;
  let replace = input.replace(/\b(?:script|svg|img)\b/gi, "");
  document.getElementsByName('xss')[0].value=replace;
  document.getElementsByName('form').submit();


}
