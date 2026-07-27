# Chapter 11 – Async / Await ⭐⭐⭐⭐⭐
- Async/Await Promise ko handle karne ka modern aur readable tarika hai. React me API calls ke liye aajkal ye sabse zyada use hota hai.
## Async/Await Kya Hai?
- Pehle Promise ko is tarah likhte the:

<code><pre>
fetch(url)
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.log(error));
</pre></code>

- Ab wahi kaam Async/Await se:

<code><pre>
async function getData() {
    try {
            const response = await fetch(url);
            const data = await response.json();
            console.log(data);
        } catch (error) {
            console.log(error);
        }
}
</pre></code>
👉 Dono same kaam karte hain, lekin Async/Await zyada readable hota hai.

## async Keyword
- async kisi function ko asynchronous bana deta hai.

<code><pre>
async function greet() {
    return "Hello";
}
</pre></code>

- Ye actually Promise return karta hai.

`greet().then(data => console.log(data));`

**Output**

Hello

**Equivalent:**
<code><pre>
function greet() {
    return Promise.resolve("Hello");
}
</pre></code>

## await Keyword
- `await` Promise ke complete hone ka wait karta hai.

<code><pre>
const promise = Promise.resolve("React");
async function show() {
    const result = await promise;
    console.log(result);
}
show();
</pre></code>

**Output**

React

⚠️ await sirf async function ke andar hi use ho sakta hai.

## Example with Delay
<code><pre>
function getData() {
    return new Promise(resolve => {
        setTimeout(() => {
            resolve("Data Loaded");
        }, 2000);
    });
}

async function showData() {
    const result = await getData();
    console.log(result);
}

showData();
</pre></code>

**2 second baad output:**

Data Loaded

**Multiple await**

<code><pre>
async function demo() {
    const a = await Promise.resolve(10);
    const b = await Promise.resolve(20);
    console.log(a + b);
}

demo();
</pre></code>

**Output**

30

## Error Handling with try...catch ⭐⭐⭐⭐⭐
- Agar Promise reject ho jaye to?

<code><pre>
async function getUser() {
    try {
        const result = await Promise.reject("Server Error");
        console.log(result);
    } catch (error) {
        console.log(error);
    }
}
getUser();
</pre></code>

**Output**

Server Error

## Promise vs Async/Await

**Promise**
<code><pre>
fetch(url)
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.log(error));
</pre></code>

**Async/Await**
<code><pre>
async function getData() {
     try {
         const response = await fetch(url);
         const data = await response.json();
         console.log(data);
    } catch (error) {
        console.log(error);
    }
}
</pre></code>

- Async/Await zyada clean aur readable lagta hai.

## React Example ⭐⭐⭐⭐⭐
- React Component me API call:

<code><pre>
import { useEffect } from "react";
function App() {
    async function fetchUsers() {
        try {
            const response = await fetch("https://api.example.com/users");
            const users = await response.json(); console.log(users);
        } catch (error) {
             console.log(error);
        }
}
useEffect(() => {
     fetchUsers();
}, []);

return `<h1>Users</h1>`; }
</pre></code>

- Real React projects me ye pattern bahut common hai.


## Interview Questions

**async kya karta hai?**
- Function ko Promise-returning function bana deta hai.

**await kya karta hai?**
- Promise complete hone tak wait karta hai.

**await kahan use kar sakte hain?**
- Sirf async function ke andar.

**Error handling ka best way?**
- try...catch

**React me API call ke liye kya prefer karte hain?**
- Modern React me Async/Await + try...catch.

## Summary

| **Feature**             | **Purpose**                             |
| ----------------------- | --------------------------------------- |
| `async`                 | Function ko asynchronous banata hai     |
| `await`                 | Promise complete hone ka wait karta hai |
| `try...catch`           | Error handle karta hai                  |
| `await fetch()`         | API response ka wait karta hai          |
| `await response.json()` | JSON data read karta hai                |
