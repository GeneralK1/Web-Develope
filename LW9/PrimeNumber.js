function isPrimeNumber(num)
{
    if (Array.isArray(num)) {
        for(let i = 0; i < num.length; i++) {
            if (Number.isInteger(num[i])) {
                if (num[i] > 3) { 
                    for(let k = 2, s = Math.sqrt(num[i]); k <= s; k++) {
                        if(num[i] % k === 0)
                        {
                            console.log(num[i] + " isn't Prime number")
                            break
                        }
                        else
                        {
                            console.log(num[i] + " is Prime number")
                            break
                        }
                    }
                }
                else
                {
                    console.log(num[i] + " is Prime number")
                }
            }
            else
            {
                console.log("Wrong input")  
            }
        }
    }
    else if (Number.isInteger(num))
    {
        for(let j = 2, s = Math.sqrt(num); j <= s; j++)
            if(num % j === 0)
                return console.log(num + " isn't Prime number")
        console.log(num + " is Prime number")
    }
    else
    {
        console.log("Wrong input")
    }
}

isPrimeNumber(['s',,4]);