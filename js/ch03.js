function process(){
  let input = document.getElementsByName('xss')[0].value;
  var para = document.createElement('p');
  para.innerHTML = input;

  document.getElementById('parent').appendChild(para);

  //document.getElementsByClassName('describe')[0].getElementsByTagName('p')[0].innerHTML=input;
}
