# Chapter 3 – Template Literals

## Template Literal Kya Hota Hai?

Template Literal ek modern JavaScript feature hai jisse hum:

- Variables ko string ke andar likh sakte hain.
- Multi-line string likh sakte hain.
- String concatenate (+) karne ki zarurat nahi padti.

Isme Backticks (``) use hote hain.

**Example**
<code><pre>
const name = "Jyoti";
console.log(`` `Hello ${name}` ``);
</pre></code>

**${} ke andar Calculation bhi kar sakte hain**

**Example**
<code><pre>
const a = 10;
const b = 20;
console.log(`` `Total = ${a + b}` ``);
</pre></code>

**Function bhi Call kar sakte hain**

**Example**
<code><pre>
function greet() {
    return "Welcome";
}

console.log(`` `${greet()} Jyoti` ``);
</pre></code>

## Interview Questions

**Q1. Template Literal me kaunsa symbol use hota hai?**

✅ Backtick ( )

**Q2. Variable insert kaise karte hain?**

``${variable}``


Q3. `${}` ke andar kya likh sakte hain?
- Variable
- Calculation
- Function Call
- JavaScript Expression

**Summary**
| Feature     | Example               |
| ----------- | --------------------- |
| Variable    | `` `Hello ${name}` `` |
| Calculation | `` `${10 + 20}` ``    |
| Function    | `` `${greet()}` ``    |
| Multi-line  | Backticks (` `)       |
