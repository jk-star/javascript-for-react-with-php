# Chapter 4 – Decision Making (if, else, Ternary, Logical Operators)

## 1. if Statement
<code><pre>
const age = 20;
if (age >= 18) {
    console.log("Eligible");
}
</pre></code>

## 2. if...else
<code><pre>
const age = 16;
if (age >= 18) {
    console.log("Adult");
} else {
    console.log("Minor");
}
</pre></code>

## 3. else if : 
- Jab multiple conditions check karni ho.
<code><pre>
const marks = 82;

if (marks >= 90) {
    console.log("A Grade");
}
else if (marks >= 75) {
    console.log("B Grade");
}
else if (marks >= 50) {
    console.log("C Grade");
}
else {
    console.log("Fail");
}
</pre></code>

## 4. Ternary Operator

**Syntax**
<code><pre>
condition ? value1 : value2
</pre></code>

**Example**
<code><pre>
const age = 20;
console.log(age >= 18 ? "Adult" : "Minor");
</pre></code>

## 5. Logical AND (&&)
- React me show/hide ke liye use hota hai.

**Example**
<code><pre>
const isAdmin = true;
isAdmin && console.log("Delete Button");
</pre></code>

## 6. Logical OR (||)

**Example**
<code><pre>
const isAdmin = true;
isAdmin && console.log("Delete Button");
</pre></code>

## Interview Questions

**Q1. React me `if` JSX ke andar use kar sakte hain?**

❌ Nahi. Ye galat hai:
<code><pre>
return (
    &lt;div&gt;
        if (true) {
            &lt;h1&gt;Hello&lt;/h1&gt;
        }
    &lt;/div&gt;
);
</pre></code>
JSX ke andar if statement directly nahi likh sakte.

**Q2. JSX ke andar kya use karte hain?**

✅ Ternary
<code><pre>
{isLoggedIn ? "Welcome" : "Login"}
</pre></code>

✅ &&
<code><pre>
{isAdmin && &lt;button&gt;Delete&lt;/button&gt;}
</pre></code>
