# Chapter 9 – Modules (import / export)

- Modules JavaScript code ko chhote-chhote reusable files me divide karne ka tareeka hai. React me almost har component, utility aur function alag module/file me hota hai.

## Module Kya Hota Hai?

- Agar poora code ek hi file me likh diya jaye, to project ko maintain karna mushkil ho jata hai.

**Example:**
<code><pre>
function add(a, b) {
    return a + b;
}

function subtract(a, b) {
    return a - b; \
}

function multiply(a, b) {
    return a * b;
}

// Hundreds of lines...
React me har feature alag file me rakha jata hai.

src/
│── App.jsx
│── Header.jsx
│── Footer.jsx
│── utils.js

Isi concept ko Modules kehte hain.
</pre></code>

## Export Kya Hota Hai?
- ``export`` kisi variable, function ya class ko dusri file me use karne ke liye available banata hai.

**Example:**

// math.js

- ex;port const PI = 3.14
- Ab is value ko kisi aur file me import kiya ja sakta hai.

## Import Kya Hota Hai?
- ```import``` dusri file se exported data ko use karta hai.

// app.js

import { PI } from "./math.js";

console.log(PI);

**Output**

3.14

## Named Export ⭐⭐⭐⭐⭐
- Ek file me multiple exports ho sakte hain.

// math.js

export const add = (a, b) => a + b;

export const subtract = (a, b) => a - b;

**Import:**

import { add, subtract } from "./math.js";

console.log(add(10, 5));

console.log(subtract(10, 5));

**Output**
15

5

**Import Alias**
- Agar naam change karna ho:

import { add as sum } from "./math.js";

console.log(sum(5, 5));

**Output**

10

## Default Export ⭐⭐⭐⭐⭐

- Ek file me sirf ek default export hota hai.

// greet.js

export default function greet() {
    console.log("Hello");
}

**Import:**

import greet from "./greet.js";

greet();

**Output**

Hello

Default import me {} nahi lagte.

## Named vs Default Export

**Named Export**

export const name = "Neha";

Import

import { name } from "./user.js";


**Default Export**

export default function App() {}

Import

import App from "./App.jsx";

**Ek File me Dono**
// user.js

export const age = 28;

export default function greet() {
    console.log("Hello");
}

**Import**

import greet, { age } from "./user.js";

greet();
console.log(age);

**Output**

Hello

28


## React Example ⭐⭐⭐⭐⭐

**Header Component**

<code><pre>
// Header.jsx

function Header() {
    `return <h1>My Website</h1>`;
}

export default Header;
</pre></code>

**App Component**

<code><pre>
// App.jsx

import Header from "./Header";
function App() { return ( <> `<Header />` </> ); }
export default App;
</pre></code>

- Ye React ka standard project structure hai.

## Multiple Named Exports Example
<code><pre>
// utils.js

export const add = (a, b) => a + b;

export const multiply = (a, b) => a * b;

export const PI = 3.14;

Import

import { add, multiply, PI } from "./utils.js";

console.log(add(2, 3));
console.log(multiply(2, 3));
console.log(PI);
</pre></code>

**Output**

5

6

3.14


## Interview Questions
**1. Module kya hai?**
- Code ko reusable aur maintainable files me divide karne ka mechanism.

**2. Named Export aur Default Export me kya difference hai?**
- Named Export → Multiple exports possible, import me {} lagte hain.
- Default Export → Sirf ek default export, import me {} nahi lagte.

**3. React me kaunsa export zyada use hota hai?**
- Dono use hote hain, lekin Components ke liye Default Export aur hooks/utilities ke liye Named Export bahut common hain.

## Summary
| **Feature**        | **Syntax**                               |
| ------------------ | ---------------------------------------- |
| **Named Export**   | `export const add = ...`                 |
| **Named Import**   | `import { add } from "./math.js"`        |
| **Default Export** | `export default App`                     |
| **Default Import** | `import App from "./App"`                |
| **Alias**          | `import { add as sum } from "./math.js"` |
