## 1. Student Information Store Karna
1. Start
1. Student की information लें (Name, Age, Class, Roll Number)
1. इन सभी values को एक variable में store करें
1. Information को display करें
1. End

## 2. Shopping Cart ka Total Amount Store Karna
1. Start
1. सभी products की price लें
1. सभी prices को जोड़ें
1. Total amount को एक variable में store करें
1. Total amount display करें
1. End

## 3. User Login Status Store Karna
1. Start
1. Check करें कि user login है या नहीं
1. Login status को एक variable में store करें (True/False)
1. Login status display करें
1. End

## 4. Discount Percentage Calculate Karna
1. Start
1. Original Price लें
1. Discount Percentage लें
1. Discount Amount calculate करें
1. Final Price calculate करें
1. Discount Amount और Final Price display करें
1. End

## 5. User Profile Banao
1. Start
1. User की details लें (Name, Age, Email, City)
1. सभी details को एक object में store करें
1. User profile को display करें
1. End

## 6. Product Details Object Me Store Karo
1. Start
1. Product की details लें (Product Name, Price, Category, Stock)
1. सभी details को एक object में store करें
1. Product details को display करें
1. End

## 7. Cart Items Array Me Store Karo
1. Start
1. Cart में add होने वाले items लें
1. सभी items को एक array में store करें
1. Cart items को display करें
1. End

## 8. Boolean Se Login Status Check Karo
1. Start
1. Login status को Boolean value (True/False) में store करें
1. यदि value True है, तो "User Logged In" display करें
1. अन्यथा "User Logged Out" display करें
1. End

## 9. Invoice Print Karo
1. Start
1. Customer Name लें
1. Product Name लें
1. Product Price लें
1. Quantity लें
1. Total Amount = Price × Quantity Calculate करें
1. Customer Name, Product Name, Quantity और Total Amount को Invoice के रूप में Display करें
1. End

## 10. Student Result Message Generate Karo
1. Start
1. Student Name लें
1. Student Marks लें
1. यदि Marks ≥ 33 हैं, तो Result = "Pass" रखें
1. अन्यथा Result = "Fail" रखें
1. Student Name, Marks और Result Message Display करें
1. End

## 11. Order Confirmation Message Banao
1. Start
1. Customer Name लें
1. Product Name लें
1. Order ID लें
1. Delivery Date लें
1. सभी जानकारी को एक Confirmation Message में Store करें
1. Order Confirmation Message Display करें
1. End

## 12. GST Calculator
1. Start
1. Product Price लें
1. GST Percentage लें
1. GST Amount = (Product Price × GST Percentage) ÷ 100 Calculate करें
1. Final Price = Product Price + GST Amount Calculate करें
1. Product Price, GST Amount और Final Price Display करें
1. End

## 13. EMI Calculator
1. Start
1. Loan Amount लें
1. Interest Rate लें Formula for calculate Total Interest = (Loan Amount × Interest Rate × Time) / 100
1. Loan Duration (Months) लें
1. Total Interest Calculate करें
1. Total Payable Amount Calculate करें (Total Payable = Loan Amount + Total Interest)
1. EMI = Total Payable Amount ÷ Loan Duration Calculate करें
1. EMI और Total Payable Amount Display करें
1. End

## 14. BMI Calculator
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

## 15. Electricity Bill Calculator
1. Start
1. Total Units Consumed लें
1. प्रति Unit Price लें
1. Electricity Bill = Total Units × Per Unit Price Calculate करें
1. यदि Extra Charges हों, तो उन्हें Bill में जोड़ें
1. Final Bill Amount Display करें
1. End

## 16. Discount Calculator
1. Start
1. Original Price लें
1. Discount Percentage लें
1. Discount Amount = (Original Price × Discount Percentage) ÷ 100 Calculate करें
1. Final Price = Original Price − Discount Amount Calculate करें
1. Original Price, Discount Amount और Final Price Display करें
1. End


## 17. Voting Eligibility
1. Start
1. Input age
1. If age ≥ 18 → Eligible
1. Else → Not eligible
1. End

## 18. Login Validation
1. Start
1. Input username & password
1. Compare with stored username & password
1. If both match → Login success
1. Else → Login failed
1. End

## 19. Salary Bonus
1. Start
1. Input salary & years of service
1. If years ≥ 5 → Bonus = 10% of salary
1. Add bonus to salary
1. Else → Salary remains same
1. End

## 20. Grade Calculator
1. Start
1. Input marks
1. If marks ≥ 90 → Grade A
1. Else if marks ≥ 75 → Grade B
1. Else if marks ≥ 50 → Grade C
1. Else → Fail
1. End

## 21 Theme Switch (Dark/Light)
1. Start
1. Default theme = Light
1. User clicks toggle button
1. If current theme = Light → Switch to Dark
1. Else → Switch to Light
1. End

## 22. Product List Display (forEach)

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

## 23. Search User (find)

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