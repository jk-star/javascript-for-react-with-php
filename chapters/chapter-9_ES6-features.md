# Chapter 8 – ES6 Features (Spread, Rest, Optional Chaining, Nullish Coalescing)

## Part 1 – Spread Operator (...) ⭐⭐⭐⭐⭐

- Spread Operator kisi Array ya Object ko "spread" (expand) kar deta hai.

**Example:**
<code><pre>
const numbers = [10, 20, 30];
console.log(...numbers);
</pre></code>

**Output**

`10 20 30`

## Arrays Merge Karna

**Example:**
<code><pre>
const frontend = ["HTML", "CSS"];
const backend = ["Node", "Express"];

const fullStack = [...frontend, ...backend];

console.log(fullStack);
</pre></code>

**Output**

`["HTML", "CSS", "Node", "Express"]`

## Object Copy ⭐⭐⭐⭐⭐
<code><pre>
const user = {
    name: "Neha",
    age: 28
};

const newUser = {
    ...user
};

console.log(newUser);
</pre></code>

**Output**

`{
    name: "Neha",
    age: 28
}`

## Object Update ⭐⭐⭐⭐⭐

- React me ye bahut important hai.

<code><pre>
const user = {
    name: "Neha",
    age: 28
};

const updatedUser = {
    ...user,
    age: 29
};

console.log(updatedUser);
</pre></code>

**Output**

`{
    name: "Neha",
    age: 29
}`

- Original object change nahi hua.

## React Example ⭐⭐⭐⭐⭐
React State update:
<code><pre>
const [user, setUser] = useState({
    name: "Neha",
    age: 28
});

setUser({
    ...user,
    age: 29
});
</pre></code>

## Part 2 – Rest Operator (...) ⭐⭐⭐⭐

- Multiple values ko ek array me collect karta hai.

**Example**
<code><pre>
function sum(...numbers) {
    console.log(numbers);
}

sum(10, 20, 30);
</pre></code>

**Output**

`[10, 20, 30]`

## Object Rest
<code><pre>
const user = {
    name: "Neha",
    age: 28,
    city: "Lucknow"
};

const { name, ...rest } = user;

console.log(name);
console.log(rest);
</pre></code>

**Output**

Neha

{
   age: 28,
   city: "Lucknow"
}

**Spread vs Rest**

| Spread           | Rest              |
| ---------------- | ----------------- |
| Expand karta hai | Collect karta hai |
| Copy/Merge       | Remaining values  |

## Part 3 – Optional Chaining (?.) ⭐⭐⭐⭐⭐
- React me API response handle karte waqt bahut use hota hai.

**Without Optional Chaining**
<code><pre>
const user = null;
console.log(user.name);
</pre></code>

**Output**

`TypeError`

**With Optional Chaining**
<code><pre>
const user = null;
console.log(user?.name);
</pre></code>

**Output**

`undefined`
- Program crash nahi hua.

## Nested Object
<code><pre>
const user = {
    address: {
        city: "Lucknow"
    }
};

console.log(user?.address?.city);
</pre></code>

**Output**

`Lucknow`

**React Example**

API se data aaya:
<code><pre>
const user = {
    profile: {
        name: "Neha"
    }
};

&lt;h1&gt;{user?.profile?.name}&lt;/h1&gt;
</pre></code>

- Agar profile nahi ho, tab bhi app crash nahi karega.

## Part 4 – Nullish Coalescing (??)

- Ye default value dene ke liye use hota hai.

**Example**

<code><pre>
const username = null;
console.log(username ?? "Guest");
</pre></code>

**Output**

Guest

**Agar value exist karti hai:**

<code><pre>
const username = "Neha";
console.log(username ?? "Guest");
</pre></code>

**Output**

``Neha``

## || vs ??
<code><pre>
const count = 0;
console.log(count || 10);
</pre></code>

**Output**

``10``

- ❌ Problem:
- 0 ko false maan liya.

**Using ??**
<code><pre>
const count = 0;
console.log(count ?? 10);
</pre></code>
**Output**

``0``

✅ 0 valid value hai, isliye wahi return hua.

## React Example
`<p>{user?.name ?? "Guest"}</p>`

**Cases:**
| user.name   | Output |
| ----------- | ------ |
| `"Neha"`   | Neha  |
| `null`      | Guest  |
| `undefined` | Guest  |

## Interview Summary
| Feature                   | React Use                     |
| ------------------------- | ----------------------------- |
| Spread (`...`)            | ⭐⭐⭐⭐⭐ State Update            |
| Rest (`...`)              | ⭐⭐⭐ Functions & Destructuring |
| Optional Chaining (`?.`)  | ⭐⭐⭐⭐⭐ API Data                |
| Nullish Coalescing (`??`) | ⭐⭐⭐⭐ Default Values           |
