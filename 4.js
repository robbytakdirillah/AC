let num = [140000, 104, 99, 15, 23];

function thirdHighest(numArray){
    if (numArray.length < 3){
        return "Minimal array length is 3!";
    }
    
    if (!Array.isArray(numArray)){
        return "Parameter Harus Array";
    }
    
    if (numArray.some(isNaN)){
        return "Array tidak sepenuhnya berupa angka";
    }
    numArray.sort(function(a, b){return b-a});
    print(numArray[2]);
}

thirdHighest(num);