# Chapter 5 – Functions

## Function Kya Hota Hai?

Function ek reusable block of code hota hai jo kisi specific kaam ko perform karta hai.

**Function Declaration**

**Example:**
<code><pre>
function greet() {
    console.log("Hello");
}
</pre></code>

**Function Call :**  greet();

**Parameters**
<code><pre>
function greet(name) {
    console.log("Hello " + name);
}
</pre></code>

**Arguments :** Function call ke time jo value pass karte hain, use Argument kehte hain.
<code><pre>
greet("Jyoti");
</pre></code>

**Return Keyword**
<code><pre>
function add(a, b) {
    return a + b;
}
console.log(add(10, 20));
</pre></code>

## Interview Questions

**Q1. Function kya hota hai?**

👉 Reusable block of code.

**Q2. Parameter aur Argument me difference?**
| Parameter              | Argument              |
| ---------------------- | --------------------- |
| Function definition me | Function call ke time |


**Q3. return kya karta hai?**

👉 Function se value wapas bhejta hai.

## Arrow Functions

**Arrow Function Syntax**
<code><pre>
const greet = () => {
    console.log("Hello");
};
greet();
</pre></code>
**Yahan:**
- const greet → Variable
- () → Parameters
- => → Arrow
- {} → Function Body