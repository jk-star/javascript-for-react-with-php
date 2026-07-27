# 📖 Chapter 7 – Objects & Destructuring

## Object Kya Hota Hai?

- Object related information ko key-value pair me store karta hai.

**Example:**
<code><pre>
const user = {
    name: "Jyoti",
    age: 28,
    city: "Lucknow"
};
</pre></code>

## Data Access Karna

**1. Dot Notation**
<code><pre>
console.log(user.name);
</pre></code>

**2. Bracket Notation**
<code><pre>
console.log(user["city"]);
</pre></code>
**Object Update**
<code><pre>
user.city = "Delhi";
console.log(user);
</pre></code>
**New Property Add Karna**
<code><pre>
user.email = "jyoti@gmail.com";
</pre></code>
**Nested Object :** React APIs me bahut common.
<code><pre>
const employee = {
    id: 1,
    name: "Jyoti",
    address: {
        city: "Lucknow",
        state: "UP"
    }
};
</pre></code>
**Part 2 – Object Destructuring**

**With Destructuring**
<code><pre>
const user = {
    name: "Jyoti",
    age: 28
};
const { name, age } = user;
console.log(name);
console.log(age);
</pre></code>
Ab baar-baar user.name likhne ki zarurat nahi.

**React Example**

**Without Destructuring**
<code><pre>
function Welcome(props) {
    return &lt;h1&gt;{props.name}&lt;/h1&gt;;
}
</pre></code>

**With Destructuring**
<code><pre>
function Welcome({ name }) {
    return &lt;h1&gt;{name}&lt;/h1&gt;
}
</pre></code>

**Variable Rename**
<code><pre>
const user = {
    name: "Jyoti"
};
const { name: userName } = user;
console.log(userName);
</pre></code>
**Default Value**
<code><pre>
const user = {
    name: "Jyoti"
};
const { city = "Lucknow" } = user;
console.log(city);
</pre></code>
**Part 3 – Array Destructuring**

**React Example**
<code><pre>
const colors = ["Red", "Green", "Blue"];
const [first, second] = colors;
console.log(first);
console.log(second);
</pre></code>

**React Example**

`useState` me ye bahut use hota hai.
<code><pre>
const [count, setCount] = useState(0);
</pre></code>

**Interview Questions**
**Q1. Object Destructuring ka fayda?**

👉 Code chhota aur readable ho jata hai.

**Q2. React me sabse zyada kahan use hota hai?**

- Props
- useState
API Response
Context API