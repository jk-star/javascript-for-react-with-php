# Loop

## 1. for Loop ⭐⭐⭐⭐⭐ (सबसे ज़्यादा इस्तेमाल)
<code><pre>
for (let i = 0; i < 5; i++) {
    console.log(i);
}
</pre></code>

- **Use:** जब पता हो कितनी बार loop चलाना है।

## 2. while Loop ⭐⭐⭐⭐
<code><pre>
let i = 0;

while (i < 5) {
    console.log(i);
    i++;
}
</pre></code>

- **Use:** जब पता न हो कितनी बार चलाना है।

## 3. do...while ⭐⭐
<code><pre>
let i = 0;

do {
    console.log(i);
    i++;
} while (i < 5);
</pre></code>

- **Use:** कम से कम एक बार code चलाना ही है।

## Modern JavaScript

## 4. for...of ⭐⭐⭐⭐⭐
- Array, String, Map, Set जैसी iterable ( ऐसी चीज़ जिसके अंदर की values को एक-एक करके निकाला जा सके। ) चीज़ों के लिए।
<code><pre>
let fruits = ["Apple", "Banana", "Orange"];

for (let fruit of fruits) {
    console.log(fruit);
}
</pre></code>

## 5. for...in ⭐⭐⭐
- Object की properties पर loop लगाने के लिए।
<code><pre>
let user = {
    name: "Jyoti",
    age: 28,
    city: "Lucknow"
};

for (let key in user) {
    console.log(key, user[key]);
}
</pre></code>

## 6. Array.forEach() ⭐⭐⭐⭐⭐
- यह technically loop नहीं, बल्कि Array की method है।
<code><pre>
let fruits = ["Apple", "Banana", "Orange"];

fruits.forEach(function(fruit) {
    console.log(fruit);
});
</pre></code>

- React और modern JavaScript में इसका काफी इस्तेमाल होता है।

## क्या इस्तेमाल करते हैं?
| Situation              | Best Choice               |
| ---------------------- | ------------------------- |
| Fixed count            | `for`                     |
| Unknown count          | `while`                   |
| At least one execution | `do...while`              |
| Array iterate          | `for...of` या `forEach()` |
| Object iterate         | `for...in`                |
