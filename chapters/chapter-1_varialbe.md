# 📖 Chapter 1 – let, const aur var

## 1. Variable kya hota hai?
- Variable ek container (box) hota hai jisme hum data store karte hain.

**📊 Difference**

| Feature                | var    | let           | const         |
| ---------------------- | ------ | ------------- | ------------- |
| Reassign kar sakte ho? | ✅ Yes  | ✅ Yes         | ❌ No          |
| React me use           | ❌ Rare | ✅ Kabhi-kabhi | ✅ Most Common |

## Interview Questions

**Q1. let aur const me kya difference hai?**

👉 let ki value change ho sakti hai, const ki nahi.

**Q2. React me sabse zyada kya use hota hai?**

👉 const

**Q3. Kya var use karna chahiye?**

👉 Nahi, modern JavaScript aur React me generally avoid karte hain.

## Part 2 – Scope

**Scope Kya Hota Hai?**
- Scope batata hai ki kisi variable ko program ke kis area (region) se access kiya ja sakta hai.

Real Life Example 👇

Socho ek school hai.
<code><pre>
School
│
├── Principal Room
├── Staff Room
├── Classroom
</pre></code>

- Principal poore school me ja sakta hai.

- Teacher sirf apni class me.

- Student sirf apni class me.

- JavaScript bhi bilkul aise hi kaam karti hai.

**JavaScript me 3 Types ke Scope hote hain**
- Global Scope
- Function Scope
- Block Scope

**Global Scope**

Global matlab... **Har jagah available.**

Example
<code><pre>
let name = "Jyoti";

function show() {
    console.log(name);
}

show();

console.log(name);
</pre></code>

**Output**
<code><pre>
Jyoti
Jyoti
</pre></code>

- JavaScript pehle Function me dekhegi. Nahi mila.

- Phir Global me dekhegi. Mil gaya ✅

**Scope Chain**

- Is process ko kehte hain

<code><pre>
Current Scope
↓
Parent Scope
↓
Global Scope
↓
Not Found
↓
Reference Error
</pre></code>

**Function Scope**
<code><pre>
function show() {
    let age = 28;
    console.log(age);
}

show();
console.log(age);
</pre></code>

**Rule**

- Function ke andar bana variable...

- Function ke bahar access nahi hota

**Block Scope**
- React me sabse important.
- Block matlab

**Example**
<code><pre>
{
let language = "JavaScript";
console.log(language);
}
</pre></code>

**let aur const**
<code><pre>
let a = 10;
{
let b = 20;
console.log(a);
console.log(b);
}
</pre></code>

**var ka Behaviour**
<code><pre>
{
var x = 100;
}
console.log(x);
</pre></code>

**Output**

- Question Ye bahar kaise aa gaya?

- Answer Kyuki var Block Scope follow hi nahi karta. var sirf Function Scope follow karta hai.

## Interview Questions

### Q1. Scope kya hai?

- Scope define karta hai ki variable ko code ke kis part se access kiya ja sakta hai.

### Q2. Kitne type ke Scope hote hain?

- Global Scope
- Function Scope
- Block Scope

### Q3. var aur let me Scope ka difference?

- var → Function Scoped
- let → Block Scoped

### Q4. const kis scope ko follow karta hai?
- Block Scope

<code><pre>
let a = 10;
{
    let a = 20;
    console.log(a);
}
console.log(a);
</pre></code>

**Output** 
20
10

**Lekin aisa kyu hua?**

- Sabse pehle ye samjho: Ye same variable nahi hain.

- JavaScript ne do alag variables banaye hain.

**Memory**

**Global Scope**

a = 10

**Block Scope**

a = 20

**Visual:**
<code><pre>
Global Scope
┌────────────┐
│ a = 10     │
└────────────┘
       │
       ▼
{
    Block Scope
    ┌────────────┐
    │ a = 20     │
    └────────────┘
}
</pre></code>

**⭐ Is concept ka naam hai Variable Shadowing**

- Jab inner scope me same naam ka variable ban jata hai, to wo outer variable ko temporarily hide (shadow) kar deta hai.

**Example:**
<code><pre>
let user = "Neha";
function demo() {
    let user = "Rahul";
    console.log(user);
}
demo();
console.log(user);
</pre></code>

**Output:**
<code><pre>
Rahul
Neha
</pre></code>

- Yahan function ke andar wala user, bahar wale user ko shadow kar raha hai.

**⚛️ React me ye bahut common hai**
<code><pre>
const user = "Admin";
function App() {
    if (true) {
        const user = "Guest";
        console.log(user);
    }
    console.log(user);
}
</pre></code>

**Output:**
<code><pre>
Guest
Admin
</pre></code>
- Ye React components me bahut dekhne ko milta hai.

## Part 3 – Hoisting

**Hoisting Kya Hai?**

- JavaScript execution se pehle variables aur functions ki declarations ko memory me register kar leti hai. Is process ko Hoisting kehte hain.

**⚠️ Dhyan do:**
- JavaScript code ko upar move nahi karti.
- Ye ek bahut common myth hai.
- Memory me registration hoti hai, code physically move nahi hota.

**JavaScript Code Kaise Execute Karti Hai?**
- Har JavaScript program 2 Phases me chalta hai.

<code><pre>
 Memory Creation Phase
 Code Execution Phase
</pre></code>

**Phase 1 - Memory Creation Phase**
- JavaScript pehle poora code scan karti hai.

<code><pre>
var a = 10;
let b = 20;
const c = 30;
function hello() {
    console.log("Hello");
}
</pre></code>

- Engine scan karega.

**Memory me kya hoga?**
<code><pre>
Memory
a       → undefined
b       → (Uninitialized)
c       → (Uninitialized)
hello   → Complete Function
</pre></code>

- Abhi koi line execute nahi hui.
- Sirf memory allocate hui hai.

**Phase 2 - Code Execution**

Ab line by line execution hoti hai.

**Line 1**
<code><pre>
var a = 10;
</pre></code>

**Memory**
<code><pre>
a
undefined
↓
10
</pre></code>

**Line 2**
<code><pre>
let b = 20;
</pre></code>
<code><pre>
b
Uninitialized
↓
20
</pre></code>
**Line 3**
<code><pre>
const c = 30;
</pre></code>
<code><pre>
c
Uninitialized
↓
30
</pre></code>

**Line 4**
- Function already memory me thi.
- Kuch nahi hua.

**Ab samjho Difference**

**Example 1**

<code><pre>
console.log(a);
var a = 10;
</pre></code>

**Memory Phase**

<code><pre>
a
↓
undefined
</pre></code>

**Execution**

**Line 1**

**Memory me kya hai?**

undefined

**Output**

undefined

Fir
<code><pre>
var a = 10;
</pre></code>

Memory
<code><pre>
a
↓
10
</pre></code>

**Sabse Important Table**

| Keyword | Memory Phase  | Access Before Initialization |
| ------- | ------------- | ---------------------------- |
| `var`   | `undefined`   | ✅ `undefined`                |
| `let`   | Uninitialized | ❌ ReferenceError             |
| `const` | Uninitialized | ❌ ReferenceError             |


**Interview Questions**

**Q1. Hoisting kya hoti hai?**

- JavaScript execution se pehle declarations ko memory me register karti hai.

**Q2. Kya JavaScript code ko upar move karti hai?**

- ❌ Nahi. Sirf memory registration hoti hai.

**Q3. var aur let me Hoisting ka difference?**

- var → undefined ke saath initialize hota hai.
- let → Memory me hota hai, lekin uninitialized rehta hai.

## Part 4 – Temporal Dead Zone (TDZ)

**TDZ Kya Hai?**

- Variable memory me exist karta hai, lekin jab tak uski initialization wali line execute nahi hoti, tab tak usko use nahi kar sakte.

- Is waiting period ko Temporal Dead Zone (TDZ) kehte hain.

**Timeline se samjho**
Code:
<code><pre>
console.log(a);
let a = 10;
console.log(a);
</pre></code>
Execution Timeline:
<code><pre>
Program Start
      │
      ▼
Memory Phase
      │
      ▼
a exists (Uninitialized)
      │
      ▼
console.log(a) ❌ TDZ
      │
      ▼
let a = 10  ✅ Initialized
      │
      ▼
console.log(a) ✅ 10
</pre></code>

**Memory View**
- Memory Phase ke baad:

<code><pre>
Memory
a
↓
(Uninitialized)
</pre></code>

- Ab pehla console.log(a):
- Engine bolta hai: "Variable mil gaya, lekin abhi initialize nahi hua."

**Result:** ReferenceError

**Initialization ke baad**

let a = 10;

**Ab memory:**
<code><pre>
Memory
a
↓
10
Ab
</pre></code>
console.log(a);

**Output:** 10

**TDZ sirf let aur const me hota hai**
**var**
<code><pre>
console.log(a);
var a = 10;
</pre></code>

**Output:** undefined

**Reason:** var memory phase me hi undefined se initialize ho jata hai.

**let**
<code><pre>
console.log(a);
let a = 10;
</pre></code>

**Output:** ReferenceError 

**Reason:** TDZ

**const**
<code><pre>
console.log(a);
const a = 10;
</pre></code>

**Output:** ReferenceError 

**Reason:** TDZ

**Golden Rule**
<code><pre>
JavaScript variable search ka order:

Current Scope
↓
Variable mila?
↓
YES
↓
Initialized?
↓
YES → Value
NO → ReferenceError
↓
Current Scope me nahi mila?
↓
Parent Scope
↓
Global Scope
</pre></code>

**Interview Questions**

**Q1. TDZ kya hai?**
- Initialization se pehle ka wo time jahan let aur const variables memory me hote hain, lekin access nahi kiye ja sakte.

**Q2. Kya let hoist hota hai?**
- ✅ Haan. Lekin TDZ ki wajah se initialization se pehle access nahi kar sakte.

**Q3. var me TDZ kyu nahi hota?**
- Kyuki var memory phase me hi undefined se initialize ho jata hai.
