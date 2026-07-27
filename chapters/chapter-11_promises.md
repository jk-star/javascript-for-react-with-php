# Chapter 10 – Promises ⭐⭐⭐⭐⭐
- Promise JavaScript ka ek object hai jo batata hai ki koi asynchronous (time lene wala) task future me complete hoga ya fail hoga. React me API call, database request aur file upload sab Promises par based hote hain.

## Promise Kya Hai?
Real-life example:

Socho tumne Swiggy ya Zomato se food order kiya.

- Order Place ✔️
- Food Prepare ⏳
- Delivered ✅
- Ya Cancel ❌

Jab tak result nahi aata, order Pending state me hota hai.

Promise bhi bilkul aisa hi kaam karta hai.

## Promise States

<code><pre>
Pending
        │
        ├── Fulfilled (Success)
        │
        └── Rejected (Failed)
</pre></code>

**1. Pending**

Task abhi chal raha hai.

**2. Fulfilled**

Task successfully complete ho gaya.

**3. Rejected**

Task fail ho gaya.

**Promise Syntax**

const promise = new Promise((resolve, reject) => {

});
- resolve() → Success
- reject() → Failure

## Success Example
<code><pre>
const promise = new Promise((resolve, reject) => {
    resolve("Data Loaded Successfully");
});

promise.then(data => {
    console.log(data);
});
</pre></code>

**Output**
- Data Loaded Successfully

## Failed Example
<code><pre>
const promise = new Promise((resolve, reject) => {
    reject("Something went wrong");
});

promise.catch(error => {
    console.log(error);
});
</pre></code>

**Output**

Something went wrong

## then()
`then()` tab chalta hai jab Promise successfully complete ho.
<code><pre>
const promise = Promise.resolve("Hello");

promise.then(result => {
    console.log(result);
});
</pre></code>

**Output**

Hello

## catch()
`catch()` error handle karta hai.
<code><pre>
const promise = Promise.reject("Network Error");

promise.catch(error => {
    console.log(error);
});
</pre></code>

**Output**

Network Error

## finally()
``finally()`` success aur failure dono cases me chalta hai.
<code><pre>
const promise = Promise.resolve("Success");

promise
    .then(result => console.log(result))
    .finally(() => console.log("Completed"));
</pre></code>

**Output**

Success

Completed


## Promise Chaining ⭐⭐⭐⭐
Ek Promise ke baad doosra Promise.
<code><pre>
const promise = Promise.resolve("Success");

Promise.resolve(5)
    .then(num => num * 2)
    ..then(num => num + 10)
    .then(result => console.log(result));
</pre></code>
**Output**

20

## Real-Life Delay Example
<code><pre>
const promise = new Promise(resolve => {
    setTimeout(() => {
        resolve("Data Received");
    }, 2000);
});

promise.then(data => {
    console.log(data);
});
</pre></code>

**2 second baad output:**

Data Received

## React Example
- React me API call generally Promise return karti hai.
<code><pre>
fetch("https://api.example.com/users")
    .then(response => response.json())
    .then(data => {
        console.log(data);
    });
</pre></code>

**Yahan:**
- `fetch()` Promise return karta hai.
- `then()` data receive karta hai.

**Promise Flow**
<code><pre>
API Call
    ↓
Pending
    ↓
Success → then()
    ↓
Failure → catch()
    ↓
Always → finally()
</pre></code>

## Interview Questions

**Promise kya hai?**

- Ek object jo future me kisi asynchronous operation ke result ko represent karta hai.

**Promise ki kitni states hoti hain?**
- Pending
- Fulfilled
- Rejected

**then() kab use hota hai?**

- Jab Promise successfully complete ho.

**catch() kab use hota hai?**

- Jab Promise reject ho ya error aaye.

**finally() kab chalta hai?**

- Success aur failure dono cases me.

## Summary

| **Method**      | **Purpose**          |
| --------------- | -------------------- |
| `new Promise()` | Promise banana       |
| `resolve()`     | Success              |
| `reject()`      | Failure              |
| `.then()`       | Success handle karna |
| `.catch()`      | Error handle karna   |
| `.finally()`    | Always execute       |
