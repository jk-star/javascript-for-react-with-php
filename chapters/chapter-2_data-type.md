# Chapter 2 – Data Types

## Data Type Kya Hota Hai?

- Data Type batata hai ki variable ke andar kis type ka data store hai.

**Example:**
<code><pre>
const name = "Jyoti";
const age = 28;
</pre></code>

**JavaScript me React ke liye 5 Important Data Types**

| Data Type | Example   | React me Use  |
| --------- | --------- | ------------- |
| String    | `"Jyoti"` | ✅ Bahut zyada |
| Number    | `28`      | ✅ Bahut zyada |
| Boolean   | `true`    | ✅ Daily       |
| Object    | `{}`      | ✅ Daily       |
| Array     | `[]`      | ✅ Daily       |

## Object :
Object multiple values ko ek saath store karta hai.
<code><pre>
const user = {
    name: "Jyoti",
    age: 28,
    city: "Lucknow"
};
console.log(user.name);
</pre></code>

## Array
<code><pre>
const fruits = ["Apple", "Banana", "Mango"];
console.log(fruits[0]);
</pre></code>

## typeof Operator
- Kabhi kabhi hume check karna hota hai ki variable ka type kya hai.
<code><pre>
const name = "Jyoti";
console.log(typeof name);
</pre></code>

## instanceof 
- instanceof check karta hai ki kya object kisi constructor/class ka instance hai.

| `typeof`                                   | `instanceof`                           |
| ------------------------------------------ | -------------------------------------- |
| Data type batata hai                       | Constructor/Class check karta hai      |
| Primitive types ke liye best               | Objects ke liye best                   |
| Output: `"string"`, `"number"`, `"object"` | Output: `true` / `false`               |
| Arrays ke liye `object` return karta hai   | Arrays ke liye `true` return karta hai |


