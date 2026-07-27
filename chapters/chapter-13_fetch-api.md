# Chapter 12 – Fetch API ⭐⭐⭐⭐⭐
- Fetch API JavaScript ka built-in API hai jo server se data fetch (GET) karne aur server ko data send (POST, PUT, DELETE) karne ke liye use hota hai. React me backend se data lane ke liye ye sabse common APIs me se ek hai.

## Fetch API Kya Hai?
- Fetch API browser aur server ke beech communication karne ke liye use hoti hai.

**Example:**
<code><pre>
React App
    │
    ▼
Fetch API
    │
    ▼
Server / Database
</pre></code>

**Fetch Syntax**

`fetch(url);`

**Example**

`fetch("https://api.example.com/users");`

- fetch() hamesha Promise return karta hai.

## GET Request ⭐⭐⭐⭐⭐

- Server se data lana.

**Promise Style**
<code><pre>
fetch("https://api.example.com/users")
    .then(response => response.json())
    .then(data => {
         console.log(data);
    })
    .catch(error => {
        console.log(error);
    });
</pre></code>

## Async/Await Style ⭐⭐⭐⭐⭐
<code><pre>
async function getUsers() {
     try {
         const response = await fetch("https://api.example.com/users");

        const users = await response.json();

        console.log(users);

        } catch (error) {
             console.log(error);
        }
}

getUsers();
</pre></code>

- Ye modern React projects me sabse common pattern hai.

**response.json()**

- Server JSON format me data bhejta hai.
- const response = await fetch(url);
- const data = await response.json();
    - response → Raw Response Object
    - response.json() → JavaScript Object

## POST Request ⭐⭐⭐⭐⭐
- Server ko data bhejna.

<code><pre>
async function addUser() {
   const user = {
      name: "Neha",
      age: 28
   };
   const response = await fetch("https://api.example.com/users", {
      method: "POST",
      headers: {
         "Content-Type": "application/json"
      },
      body: JSON.stringify(user)
   });
   const result = await response.json();
   console.log(result);
}
</pre></code>

**JSON.stringify()**
- JavaScript Object ko JSON String me convert karta hai.

<code><pre>
const user = {
   name: "Neha"
};

console.log(JSON.stringify(user));
</pre></code>

**Output**

``{
   "name": "Neha"
}``


**JSON.parse()**
- JSON String ko JavaScript Object banata hai.

<code><pre>
const json = '{"name":"Neha"}';
console.log(JSON.parse(json));
</pre></code>

**Output**

``{
    name: "Neha"
}``


## PUT Request
- Existing data update karna.

<code><pre>
await fetch("https://api.example.com/users/1", {
   method: "PUT",
   headers: {
      "Content-Type": "application/json"
   },
   body: JSON.stringify({
      name: "New Name"
   })
});
</pre></code>

## DELETE Request
- Data delete karna.

<code><pre>
await fetch("https://api.example.com/users/1", {
   method: "DELETE"
});
</pre></code>

## React Example ⭐⭐⭐⭐⭐

<code><pre>
import {
   useEffect,
   useState
} from "react";

function App() {
   const [users, setUsers] = useState([]);
   async function fetchUsers() {
      try {
         const response = await fetch("https://api.example.com/users");
         const data = await response.json();
         setUsers(data);
      } catch (error) {
         console.log(error);
      }
   }
   useEffect(() => {
      fetchUsers();
   }, []);
   return ( < div > {
            users.map(user => ( < p key = {
                  user.id
               } > {
                  user.name
               } < /p> ))} `</div >` );
            }

            export default App;
</pre></code>

- Ye React me data fetch karne ka bahut common pattern hai.

## HTTP Methods
| **Method** | **Purpose**                |
| ---------- | -------------------------- |
| **GET**    | Data lana                  |
| **POST**   | Naya data create karna     |
| **PUT**    | Existing data update karna |
| **DELETE** | Data delete karna          |

## Fetch vs Axios
| **Fetch API**                              | **Axios**                            |
| ------------------------------------------ | ------------------------------------ |
| Browser me built-in                        | External library                     |
| Install nahi karna padta                   | `npm install axios`                  |
| `response.json()` manually karna padta hai | Data automatically parse ho jata hai |
| Lightweight                                | Extra features                       |


## Interview Questions

**Fetch API kya hai?**
- Browser ka built-in API jo server se data fetch aur send karta hai.

**Fetch kya return karta hai?**
- Promise.

**response.json() kya karta hai?**
- Response ko JavaScript Object me convert karta hai.

**POST request me JSON.stringify() kyun use karte hain?**
- JavaScript Object ko JSON String me convert karne ke liye.

**React me Fetch kis hook ke saath use hota hai?**
- Mostly useEffect() ke saath.

## Summary

| **Feature**        | **Purpose**                      |
| ------------------ | -------------------------------- |
| `fetch()`          | Server se request bhejna         |
| `GET`              | Data lana                        |
| `POST`             | Data create karna                |
| `PUT`              | Data update karna                |
| `DELETE`           | Data delete karna                |
| `response.json()`  | JSON ko JavaScript Object banana |
| `JSON.stringify()` | Object ko JSON String banana     |
| `JSON.parse()`     | JSON String ko Object banana     |
