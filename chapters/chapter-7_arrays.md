# 📖 Chapter 6 – Arrays

## Array Kya Hota Hai?

- Array ek variable hai jo multiple values store karta hai.

**Example:**
<code><pre>
const fruits = ["Apple", "Banana", "Mango"];
</pre></code>

**Array Index :** Har element ka index hota hai.
<code><pre>
const fruits = ["Apple", "Banana", "Mango"];
console.log(fruits[0]);
console.log(fruits[1]);
console.log(fruits[2]);
</pre></code>

**Array Length**
<code><pre>
const fruits = ["Apple", "Banana", "Mango"];
console.log(fruits.length);
</pre></code>
**Array me Data Types Mix ho sakte hain**
<code><pre>
const data = [
    "Jyoti",
    28,
    true
];
</pre></code>
Lekin React projects me generally ek hi type ka data rakhte hain.

**Array of Objects**
<code><pre>
const users = [
    {
        id: 1,
        name: "Jyoti"
    },
    {
        id: 2,
        name: "Rahul"
    },
    {
        id: 3,
        name: "Amit"
    }
];
</pre></code>

**Array Access**
<code><pre>
console.log(users[0].name);
</pre></code>

## map() ⭐⭐⭐⭐⭐ (React ka King 👑)

## map() Kya Karta Hai?

- Array ke har element par kaam karta hai aur naya array return karta hai.

**Example:**
<code><pre>
const numbers = [1, 2, 3];
const result = numbers.map(num => num * 2);
console.log(result);
</pre></code>
**React Example**
<code><pre>
const users = ["Jyoti", "Rahul", "Amit"];
function App() {
    return (
        <>
            {users.map(user => (
                &lt;h2&gt;{user}&lt;/h2&gt;
            ))}
        </>
    );
}
</pre></code>

## filter()

- Ye condition ke according data filter karta hai.

**Example:**
<code><pre>
const numbers = [10, 15, 20, 25];
const result = numbers.filter(num => num >= 20);
console.log(result);
</pre></code>
**React Example :** Sirf Active Users dikhana
<code><pre>
const users = [
    { name: "Neha", active: true },
    { name: "Rahul", active: false },
    { name: "Amit", active: true }
];
const activeUsers = users.filter(user => user.active);
console.log(activeUsers);
</pre></code>

**find() :** Ye sirf pehla matching element return karta hai.
<code><pre>
const users = [
    { id: 1, name: "Jyoti" },
    { id: 2, name: "Rahul" }
];
const user = users.find(item => item.id === 2);
console.log(user);
</pre></code>
**forEach()**

- Ye sirf loop chalata hai.
- Kuch return nahi karta.

<code><pre>
const numbers = [1, 2, 3];
numbers.forEach(num => {
    console.log(num);
});
</pre></code>

## some()
- Kya kam se kam ek element condition satisfy karta hai?
<code><pre>
const numbers = [10, 20, 30];
console.log(numbers.some(num => num > 25));
</pre></code>

## every()
- Kya saare elements condition satisfy karte hain?
<code><pre>
const numbers = [10, 20, 30];
console.log(numbers.every(num => num > 5));
</pre></code>

## React Developer ko Kya Yaad Rakhna Hai?
- सभी Array Methods का Skeleton लगभग एक जैसा होता है।

<code><pre>
array.method((item, index) => {
    // logic
});
</pre></code>

## 1. forEach() = "हर Item पर जाओ"

<code><pre>
let numbers = [10, 20, 30];

numbers.forEach((item) => {
    console.log(item);
});
</pre></code>

## 2. map() = "बदलो (Transform)"
- Map = एक जगह से दूसरी जगह
- हमेशा नई Array देता है।
<code><pre>
let numbers = [10, 20, 30];

let result = numbers.map((item) => {
    return item * 2;
});

console.log(result);
</pre></code>

## 3. filter() = "छाँटो"
<code><pre>
let numbers = [10,20,30,40];

let result = numbers.filter((item)=>{

    return item >20;

});

console.log(result);
</pre></code>

- Condition True होगी तभी आएगा।

## 4. find() = "पहला Match"

<code><pre>
let numbers=[10,20,30,40];

let result=numbers.find((item)=>{

return item>20;

});

console.log(result);
</pre></code>

## 5. some() = "क्या कोई एक है?"

<code><pre>
let numbers=[10,20,30];

let result=numbers.some((item)=>{

return item>25;

});

console.log(result);
</pre></code>

## 6. every() = "सब"
<code><pre>
let numbers=[10,20,30];

let result=numbers.every((item)=>{

return item>5;

});

console.log(result);
</pre></code>

forEach

↓

कुछ मत लौटाओ

Just Do Something

-----------------------

map

↓

Transform

नई Array

-----------------------

filter

↓

छाँटो

नई Array

-----------------------

find

↓

पहला Match

एक Value

-----------------------

some

↓

कम से कम एक?

true/false

-----------------------

every

↓

सब?

true/false

## 1 Line Memory

| Method      | याद रखने का Keyword  | Return       |
| ----------- | -------------------- | ------------ |
| `forEach()` | **Do** (कुछ करो)     | `undefined`  |
| `map()`     | **Transform** (बदलो) | New Array    |
| `filter()`  | **Select** (छाँटो)   | New Array    |
| `find()`    | **First Match**      | Single Value |
| `some()`    | **At Least One?**    | `true/false` |
| `every()`   | **All?**             | `true/false` |



| Method      | React me Use   |
| ----------- | -------------- |
| `map()`     | ⭐⭐⭐⭐⭐ Daily    |
| `filter()`  | ⭐⭐⭐⭐ Bahut use |
| `find()`    | ⭐⭐⭐ Common     |
| `forEach()` | ⭐⭐ Kabhi-kabhi |
| `some()`    | ⭐⭐⭐ Validation |
| `every()`   | ⭐⭐⭐ Validation |

## Interview Trick

## map() vs forEach()
<code><pre>
const numbers = [1, 2, 3];
const result = numbers.map(num => num * 2);
console.log(result);
</pre></code>

**Output:**  [2, 4, 6]
<code><pre>
const numbers = [1, 2, 3];
const result = numbers.forEach(num => num * 2);
console.log(result);
</pre></code>

**Output:**  undefined

**Summary**
| Method      | Return                 |
| ----------- | ---------------------- |
| `map()`     | New Array              |
| `filter()`  | New Array              |
| `find()`    | First Matching Element |
| `forEach()` | `undefined`            |
| `some()`    | `true/false`           |
| `every()`   | `true/false`           |
