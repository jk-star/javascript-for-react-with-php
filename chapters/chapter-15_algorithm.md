# Chapter 15 – Algorithm

## Practice Set 1 – Variables (let, const, var)

**1. Student Information Store Karna**
1. Start
1. Student की information लें (Name, Age, Class, Roll Number)
1. इन सभी values को एक variable में store करें
1. Information को display करें
1. End

**2. Shopping Cart ka Total Amount Store Karna**
1. Start
1. सभी products की price लें
1. सभी prices को जोड़ें
1. Total amount को एक variable में store करें
1. Total amount display करें
1. End

**3. User Login Status Store Karna**
1. Start
1. Check करें कि user login है या नहीं
1. Login status को एक variable में store करें (True/False)
1. Login status display करें
1. End

**4. Discount Percentage Calculate Karna**
1. Start
1. Original Price लें
1. Discount Percentage लें
1. Discount Amount calculate करें
1. Final Price calculate करें
1. Discount Amount और Final Price display करें
1. End

## Practice Set 2 – Data Types

**5. User Profile Banao**
1. Start
1. User की details लें (Name, Age, Email, City)
1. सभी details को एक object में store करें
1. User profile को display करें
1. End

**6. Product Details Object Me Store Karo**
1. Start
1. Product की details लें (Product Name, Price, Category, Stock)
1. सभी details को एक object में store करें
1. Product details को display करें
1. End

**7. Cart Items Array Me Store Karo**
1. Start
1. Cart में add होने वाले items लें
1. सभी items को एक array में store करें
1. Cart items को display करें
1. End

**8. Boolean Se Login Status Check Karo**
1. Start
1. Login status को Boolean value (True/False) में store करें
1. यदि value True है, तो "User Logged In" display करें
1. अन्यथा "User Logged Out" display करें
1. End

## Practice Set 3 – Template Literals

**9. Invoice Print Karo**
1. Start
1. Customer Name लें
1. Product Name लें
1. Product Price लें
1. Quantity लें
1. Total Amount = Price × Quantity Calculate करें
1. Customer Name, Product Name, Quantity और Total Amount को Invoice के रूप में Display करें
1. End

**10. Student Result Message Generate Karo**
1. Start
1. Student Name लें
1. Student Marks लें
1. यदि Marks ≥ 33 हैं, तो Result = "Pass" रखें
1. अन्यथा Result = "Fail" रखें
1. Student Name, Marks और Result Message Display करें
1. End

**11. Order Confirmation Message Banao**
1. Start
1. Customer Name लें
1. Product Name लें
1. Order ID लें
1. Delivery Date लें
1. सभी जानकारी को एक Confirmation Message में Store करें
1. Order Confirmation Message Display करें
1. End

**12. GST Calculator**
1. Start
1. Product Price लें
1. GST Percentage लें
1. GST Amount = (Product Price × GST Percentage) ÷ 100 Calculate करें
1. Final Price = Product Price + GST Amount Calculate करें
1. Product Price, GST Amount और Final Price Display करें
1. End

**13. EMI Calculator**
1. Start
1. Loan Amount लें
1. Interest Rate लें Formula for calculate Total Interest = (Loan Amount × Interest Rate × Time) / 100
1. Loan Duration (Months) लें
1. Total Interest Calculate करें
1. Total Payable Amount Calculate करें (Total Payable = Loan Amount + Total Interest)
1. EMI = Total Payable Amount ÷ Loan Duration Calculate करें
1. EMI और Total Payable Amount Display करें
1. End

**14. BMI Calculator**
1. Start
1. Weight (kg) लें
1. Height (meters) लें
1. BMI = Weight ÷ (Height × Height) Calculate करें
1. यदि BMI < 18.5 है, तो "Underweight" Display करें
1. यदि BMI 18.5 से 24.9 के बीच है, तो "Normal Weight" Display करें
1. यदि BMI 25 से 29.9 के बीच है, तो "Overweight" Display करें
1. यदि BMI ≥ 30 है, तो "Obese" Display करें
1. BMI और Category Display करें
1. End

**15. Electricity Bill Calculator**
1. Start
1. Total Units Consumed लें
1. प्रति Unit Price लें
1. Electricity Bill = Total Units × Per Unit Price Calculate करें
1. यदि Extra Charges हों, तो उन्हें Bill में जोड़ें
1. Final Bill Amount Display करें
1. End

**16. Discount Calculator**
1. Start
1. Original Price लें
1. Discount Percentage लें
1. Discount Amount = (Original Price × Discount Percentage) ÷ 100 Calculate करें
1. Final Price = Original Price − Discount Amount Calculate करें
1. Original Price, Discount Amount और Final Price Display करें
1. End

## Practice Set 4 – Conditionals

**17. Voting Eligibility**
1. Start
1. Input age
1. If age ≥ 18 → Eligible
1. Else → Not eligible
1. End

**18. Login Validation**
1. Start
1. Input username & password
1. Compare with stored username & password
1. If both match → Login success
1. Else → Login failed
1. End

**19. Salary Bonus**
1. Start
1. Input salary & years of service
1. If years ≥ 5 → Bonus = 10% of salary
1. Add bonus to salary
1. Else → Salary remains same
1. End

**20. Grade Calculator**
1. Start
1. Input marks
1. If marks ≥ 90 → Grade A
1. Else if marks ≥ 75 → Grade B
1. Else if marks ≥ 50 → Grade C
1. Else → Fail
1. End

**21 Theme Switch (Dark/Light)**
1. Start
1. Default theme = Light
1. User clicks toggle button
1. If current theme = Light → Switch to Dark
1. Else → Switch to Light
1. End

## Practice Set 7 – Arrays

**22. Product List Display (forEach)**
- Ek product list hai. Sabhi products ko webpage par display karna hai.
1. Products ka array banao.
1. Empty string ya empty container lo.
1. Array ke har product par loop chalao.
1. Har product ka
    - Name
    - Price
    - Image
    - collect karo.
1. HTML string banao.
1. String ko webpage me display karo.

**23. Search User (find)**
- ID ya Name ke according ek user search karna hai.
1. Users ka array lo.
1. Search value lo.
1. Array me ek-ek user check karo.
1. Agar user ka naam ya ID match kare
    YES →
        User return karo.
    NO →
        Next user check karo.

1. Agar koi user nahi mila
- Show "No User Found"


**24. Active Users Filter (filter)**
- Sirf active users dikhane hain.
1. Users array lo.
1. Har user ko check karo.
1. Agar user active hai -> Store karo, Nahi hai -> Ignore karo.
1. Naya array return karo.
1. Display karo.

**25. Completed Tasks (filter)**
- Completed tasks hi show karni hain.
1. Tasks array lo.
1. Har task check karo.

1. Completed ?

Yes

Store

No

Skip

1. Completed tasks return karo.
1. Display karo.

**26. Shopping Cart (map)**
- Products ke naam aur price ko formatted list me convert karna hai.
1. Cart array lo.
1. Har product uthao.
1. Naya object ya string banao.

**Example**

- Product Name
- Price
- Quantity
1. Sabhi transformed values ko new array me store karo.
1. Display karo.

**27. Check Any Out of Stock Product (some)**
- Check karna hai ki koi bhi product out of stock hai ya nahi.
1. Products array lo.
1. Har product check karo.
1. Out Of Stock ?

Yes

Immediately True Return

No

Next Product

1. Agar sab check ho gaye

Return False

**28. Check All Students Passed (every)**
- Check karna hai ki sab students pass hue hain ya nahi.
1. Students array lo.
1. Har student check karo.
1. Pass ?

Yes

Next Student

No

Immediately False

1. Agar sab pass

Return True

## Practice Set 8 – Objects

**29. Employee Database**
1. Start
1. Employee object banao.
1. Employee ki details store karo:
    - ID
    - Name
    - Department
    - Salary
    - Email
1. Object ki values display karo.
1. End

**30. Student Report Card**
1. Start
1. Student object banao.
1. Student ki details store karo:
    - Name
    - Roll Number
    - Class
1. Marks ka ek nested object banao:
    - English
    - Math
    - Science
1. Total marks calculate karo.
1. Percentage calculate karo.
1. Grade decide karo.
1. Report Card display karo.
1. End

**31. Product Details**
1. Start
1. Product object banao.
1. Product ki details store karo:
    - ID
    - Name
    - Price
    - Category
    - Stock
1. Product details display karo.
1. End

**32. Customer Address (Nested Object)**
1. Start
1. Customer object banao.
1. Customer ki basic details store karo:
    - Name
    - Mobile
    - Email
1. Address ka nested object banao:
    - House Number
    - Street
    - City
    - State
    - Pincode
1. Customer aur Address display karo.
1. End

**35. Object Property Update**
1. Start
1. Employee object banao.
1. Salary update karo.
1. Department update karo.
1. Updated object display karo.
1. End

**36. New Property Add Karna**
1. Start
1. Student object banao.
1. Mobile Number add karo.
1. Email add karo.
1. Updated object display karo.
1. End

**37. Property Delete Karna**
1. Start
1. Product object banao.
1. Stock property delete karo.
1. Updated object display karo.
1. End

## Practice Set 9 – Destructuring

**38. Object Destructuring**
1. Start
1. User object banao.
1. Object me Name, Age, City aur Email store karo.
1. Object Destructuring ka use karke values alag variables me store karo.
1. Variables display karo.
1. End.

**39. Array Destructuring**
1. Start
1. Students ka array banao.
1. Array me multiple names store karo.
1. Array Destructuring ka use karke first, second aur third value alag 
1. variables me store karo.
1. Variables display karo.
1. End.

**40. Default Values**
1. Start
1. Employee object banao.
1. Kuch properties store karo.
1. Ek missing property ke liye default value set karo.
1. Values display karo.
1. End.

**41. Rename Variables**
1. Start
1. Product object banao.
1. Object Destructuring karo.
1. Property names ko naye variable names me rename karo.
1. Renamed variables display karo.
1. End.

**42. API Response Destructuring**
1. Start
1. API response object banao.
1. Response me Status, Message aur Data store karo.
1. Data object ke andar User ki details store karo.
1. Destructuring ka use karke required values nikalo.
1. Values display karo.
1. End.

**43. User Profile**
1. Start
1. User Profile object banao.
1. Name, Email, Mobile aur Address store karo.
1. Address ko nested object banao.
1. Destructuring ka use karke Name, Email aur City nikalo.
1. Values display karo.
1. End.

## Practice Set 10 – Spread Operator

**44. Array Copy**
1. Start
1. Students ka array banao.
1. Spread Operator `(...)` ka use karke array ki copy banao.
1. Original aur copied array display karo.
1. End.

**45. Object Copy**
1. Start
1. Employee object banao.
1. Spread Operator `(...)` ka use karke object ki copy banao.
1. Original aur copied object display karo.
1. End.

**46. Merge Arrays**
1. Start
1. Do alag arrays banao.
1. Spread Operator `(...)` ka use karke dono arrays merge karo.
1. Merged array display karo.
1. End.

**47. Merge Objects**
1. Start
1. Do objects banao.
1. Spread Operator `(...)` ka use karke dono objects merge karo.
1. Merged object display karo.
1. End.

**48. Shopping Cart Update**
1. Start
1. Shopping cart ka array banao.
1. Ek naya product object banao.
1. Spread Operator `(...)` ka use karke naye product ko cart me add karo.
1. Updated cart display karo.
1. End.

**49. User Profile Update**
1. Start
1. User Profile object banao.
1. User ki updated details (City, Mobile, Email, etc.) ka naya object  banao.
1. Spread Operator `(...)` ka use karke profile update karo.
1. Updated profile display karo.
1. End.

**50. Add New Product**
1. Start
1. Products ka array banao.
1. Naya product object banao.
1. Spread Operator `(...)` ka use karke product list me add karo.
1. Updated products list display karo.
1. End.

## Practice Set 11 – Rest Operator

**51. Total Marks Calculator (Rest Parameters)**
1. Start
1. Ek function banao.
1. Function me Rest Parameter (...marks) lo.
1. Sabhi marks ko loop se add karo.
1. Total marks display karo.
1. End.

**52. Dynamic Price Calculator (Rest Parameters)**
1. Start
1. Ek function banao.
1. Function me Rest Parameter (...prices) lo.
1. Sabhi prices ka total calculate karo.
1. Final amount display karo.
1. End.

**53. Remove Properties (Object Rest)**
1. Start
1. Employee object banao.
1. Object Destructuring karo.
1. Ek ya do properties alag nikalo.
1. Baaki sab properties Object Rest (...remainingData) me store karo.
1. Remaining object display karo.
1. End.

**54. Collect Remaining Data (Object Rest)**
1. Start
1. Customer object banao.
1. Name aur Mobile ko destructure karo.
1. Baaki sari properties Rest Operator me collect karo.
1. Name, Mobile aur Remaining Data display karo.
1. End.


**55. Student Attendance (Rest Parameters)**
1. Start
1. Ek function banao.
1. First parameter me Teacher Name lo.
1. Rest Parameter (...students) me sabhi students lo.
1. Teacher Name display karo.
1. Students ki list display karo.
1. End.

**56. Employee Details (Object Rest)**
1. Start
1. Employee object banao.
1. Name aur Department ko destructure karo.
1. Baaki properties Rest Operator me collect karo.
1. Name, Department aur Remaining Details display karo.
1. End.

**57. Online Order System (Rest Parameters)**
1. Start
1. Ek function banao.
1. Customer Name first parameter me lo.
1. Rest Parameter (...items) me order items lo.
1. Customer Name display karo.
1. Ordered Items display karo.
1. End.

**58. Exam Result System (Rest Parameters)**
1. Start
1. Ek function banao.
1. Student Name first parameter me lo.
1. Rest Parameter (...marks) me sabhi subject marks lo.
1. Total aur Average calculate karo.
1. Result display karo.
1. End.

## Practice Set 12 – Optional Chaining (?.)

**59. API Response**
1. Start
1. API response object banao.
1. Response me status, message aur data store karo.
1. data ke andar user details store karo.
1. Optional Chaining (?.) ka use karke user ki details access karo.
1. Values display karo.
1. End.

**60. User Profile**
1. Start
1. User Profile object banao.
1. User ki basic details store karo.
1. Address object optional rakho.
1. Optional Chaining (?.) ka use karke City aur State access karo.
1. Values display karo.
1. End.

**61. Nested Address**
1. Start
1. Customer object banao.
1. Customer ke andar Address ka nested object banao.
1. Address ke andar House Number, Street, City aur Pincode store karo.
1. Optional Chaining (?.) ka use karke Address ki properties access karo.
1. Values display karo.
1. End.

## Practice Set 13 – Nullish Coalescing (??)

**1. Default Username**
1. Start
1. User object banao.
1. User me username property store karo (ya usse missing rakho).
1. Nullish Coalescing (??) ka use karke default username set karo.
1. Username display karo.
1. End.

## Practice Set 14 – ES6 Modules

**1. Calculator Module (Named Export)**

1. Start
1. calculator.js file banao.
1. Add, Subtract, Multiply aur Divide functions banao.
1. Functions ko Named Export karo.
1. main.js me functions ko Import karo.
1. Functions call karke result display karo.
1. End.

**2. User Module (Default Export)**

1. Start
1. user.js file banao.
1. User object banao.
1. User object ko Default Export karo.
1. main.js me Default Import karo.
1. User details display karo.
1. End.

**3. Authentication Module (Named Export)**

1. Start
1. auth.js file banao.
1. Login function banao.
1. Logout function banao.
1. CheckUser function banao.
1. Sabhi functions ko Named Export karo.
1. main.js me Import karo.
1. Functions call karo.
1. Result display karo.
1. End.

**4. Utility Functions (Named Export)**
1. Start
1. utils.js file banao.
1. Capitalize function banao.
1. Currency Format function banao.
1. Date Format function banao.
1. Sabhi functions ko Named Export karo.
1. main.js me Import karo.
1. Functions call karke output display karo.
1. End.

5. Alias Import
Algorithm
Start
math.js file banao.
Add aur Multiply functions export karo.
main.js me Import karte waqt Alias (as) use karo.
Alias function call karo.
Result display karo.
End.
6. Product Module
Algorithm
Start
products.js file banao.
Products array banao.
Products array ko Default Export karo.
main.js me Import karo.
Products display karo.
End.
7. Employee Module
Algorithm
Start
employee.js file banao.
Employee object banao.
Employee object ko Default Export karo.
main.js me Import karo.
Employee details display karo.
End.
8. Shopping Cart Module
Algorithm
Start
cart.js file banao.
Add To Cart function banao.
Remove From Cart function banao.
Get Cart function banao.
Functions ko Named Export karo.
main.js me Import karo.
Functions call karo.
Cart details display karo.
End.