# Chapter 17 Logic Building Questions

## Level 2: if-else Logic (16–35)

## 16. Even/Odd check karo.
1. start 
1. Ek number (`num`) input lo.
1. Check karo :
    if(num%2 === 0)
    result = "Even"
    else
    result =  "Odd"
1. `result` varialbe ko display karo
1. End  

## 17. Positive/Negative check karo.
1. start
1. Ek number (`num`) input lo.
1. Check karo:
    if(num>0)
        result = "Positive"
    else if (num<0)
        result = "Negative"
    else
        result = "Zero"
1. `result` varialbe ko display karo
1. End 

## 18. Zero check karo.
1. start
1. Ek number (`num`) input lo.
1. Check Karo:
    if(num === 0)
        result = "Zero"
    else
        result = "Not Zero"
1. `result` varialbe ko display karo
1. End 

## 19. Vote eligibility check karo.
1. start
1. `age` input lo.
1. Check karo:
if(age>=18)
    result = "Eligible for voting"
else
    result = "Not eligible for voting"
1. `result` varialbe ko display karo
1. End

## 20. Driving eligibility check karo.
1. start
1. `age` input lo.
1. Check karo:
if(age>=18)
    result = "Eligible for driving"
else
    result = "Not eligible for driving"
1. `result` varialbe ko display karo
1. End

## 21. Leap year check karo.
1. start
1. `year` input lo.
1. Check karo :
if(year%400 === 0 || (year%4 === 0 || year%100 !== 0))
    result = "Leap Year"
else
    result = "Not a Leap Year"
1. `result` varialbe ko display karo
1. End

## 22. Largest of two numbers.
1. start
1. Do number (`num1`, `num2`) input lo.
1. Check karo
if(num1>num2)
    result = `num1` is largest;
else
    result = `num2` is largest;
1. `result` varialbe ko display karo
1. End 

## 23. Largest of three numbers.
1. start
1. Theen number (`a`,`b`,`c`) lo.
1. Check karo:
if (a>b && a>c)
    result = "a is largest"
else if (b>c && b>c)
    result = "b is largest
else
    result = "c is largest
1. `result` varialbe ko display karo
1. End 

## 24. Smallest of three numbers.
1. start
1. Three number (`a`,`b`,`c`) lo.
1. Check karo:
if (a<b && a<c)
    result = "a is smallest"
else if (b<c && b<a)
    result = "b is smallest"
else
    result = "c is smallest"
1. `result` varialbe ko display karo
1. End 

## 25. Grade Calculator.
1. start
1. `marks` input lo.
1. Check karo:
if (marks >= 95)
    result = "A"
else if (marks >= 85)
    result = "B"
else if (marks >= 75)
    result = "C"
else if (marks >= 55)
    result = "D"
else if (marks >= 35)
    result = "E"
else
    result = "Fail"
1. `result` varialbe ko display karo
1. End 

## 26. Pass/Fail Calculator.
1. start
1. `marks` input lo.
1. Check karo :
if(marks >= 35)
    result = "Pass"
else
    result = "Fail"
1. `result` varialbe ko display karo
1. End 

## 27. Salary Bonus Calculator.
1. start
1. Do varialbe (`salary` and `bonusPercentage`) lo.
1. Formula : `bonus = (salary*bonusPercentage)/100`
1. Now bonus ko salary se add kr do `finalSalary = salary + bonus`
1. `finalSalary` ko display karo.
1. End

## 28. Electricity Bill Calculator.
1. start
1. Do variable (`unit` and `pricePerUnit`) lo.
1. Calculate bill = (unit*pricePerUnit)
1. `bill` variable ko display karo.
1. End

## 29. Shopping Discount Calculator.
1. start
1. Do varialbe (`amount` and `discountPercentage`) lo .
1. Calculate discountAmount = (amount*discountPercentage)/100;
1. paidAmount = amount - discountAmount
1. `paidAmount` variable ko display karo.
1. End

## 30. Login Validation.
1. start
1. Four variables (`userName`, `userPass`, `storedName` and `storedPass`)
1. Check karo :
if(userName === storedName && userPass === storedPass)
    status = true
else
    status = false
1. `status` variable ko display karo.
1. End

## 31. ATM PIN Validation.
1. start
1. Do variables (`userPin` and `storedPin`) lo.
1. Check Karo:
if(`userPin` === `storedPin`)
    result = "Valid Pin"
else 
    result = "Invalid Pin"
1. `result` variable ko display karo.
1. End 

## 32. Password Strength Check.
1. Start
2. Ek variable `password` input lo.
3. Check karo:

   if (
      password.length >= 8 &&
      password me uppercase letter ho &&
      password me lowercase letter ho &&
      password me number ho &&
      password me special character ho
   )
      result = "Strong Password"
   else
      result = "Weak Password"

4. `result` variable ko display karo.
5. End

## 33. Character Vowel hai ya nahi.  aeiou , AEIOU
1. start
1. ek variable `character` input lo.
1. Check karo:

if(character === 'a' || character === 'e' || character === 'i' ||character === 'o' || character === 'u' || character === 'A' || character === 'E' || character === 'I' || character === 'O' || character === 'U' )  
    result = "Vowel";
else
    result = "Not Vowel";

4. `result` variable ko display karo.
5. End

## 34. Alphabet ya Number.
1. start
1. ek variable `character` input lo.
1. Check karo:

if (
    (character >= 'A' && character <= 'Z') ||
    (character >= 'a' && character <= 'z')
)
    result = "Alphabet";
else
    result = "Not Alphabet";

4. `result` variable ko display karo.
5. End

## 35. Uppercase ko Lowercase check karo.
1. start
1. ek variable `character` input lo.
1. Check karo:

if (char >= 'A' && char <= 'Z')
    result = "Uppercase";
else
    result = "Not Uppercase";
    
4. `result` variable ko display karo.
5. End