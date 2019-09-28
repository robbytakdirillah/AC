
input = "Haku9345";


input = input.replace(/\D/g,'');
var arr = input.split('');
var sorted = arr.sort();
input = sorted.join('');
print(input);