# Chapter 10 – Modules (import / export)

- Modules JavaScript code ko chhote-chhote reusable files me divide karne ka tareeka hai. React me almost har component, utility aur function alag module/file me hota hai.

## Module Kya Hota Hai?

- Agar poora code ek hi file me likh diya jaye, to project ko maintain karna mushkil ho jata hai.

**Example**
**file 1 : math.js**
<code><pre>
export function add(a, b) { return a + b; }
</pre></code>

**file 2 : main.js**
<code><pre>
import { add } from './math.js';
console.log(add(2, 3)); // 5
</pre></code>

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

## A. Named Export
- Isme aap ek file se multiple variables/functions export kar sakte ho.

**calculator.js**

<code><pre>
export const add = (a, b) => a + b;

export const subtract = (a, b) => a - b;

export const multiply = (a, b) => a * b;
</pre></code>

**main.js**
<code><pre>
import { add, subtract, multiply } from "./calculator.js";

console.log(add(10, 5));

console.log(subtract(10, 5));
</pre></code>

**Rule**
- export har function/variable ke saath likh sakte ho.
- Import karte waqt {} (curly braces) use hote hain.

<cdoe><pre>
import { add } from "./calculator.js";
</pre></code>

## B. Default Export
- Isme sirf ek hi default export hota hai.

**user.js**
<code><pre>
const user = {
    name: "Jyoti",
    city: "Delhi"
};

export default user;
</pre></code>

**main.js**

<code><pre>
import user from "./user.js";

console.log(user.name);
</pre></code>

**Rule**
- export default sirf ek baar use kar sakte ho.
- Import karte waqt {} nahi lagte.

<code><pre>
import user from "./user.js";
</pre></code>

**Difference**

| Named Export                               | Default Export                             |
| ------------------------------------------ | ------------------------------------------ |
| Multiple exports ho sakte hain             | Sirf ek default export hota hai            |
| `export` use hota hai                      | `export default` use hota hai              |
| `{}` ke saath import hota hai              | `{}` ke bina import hota hai               |
| Naam same hona chahiye (ya alias use karo) | Import karte waqt koi bhi naam de sakte ho |

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
