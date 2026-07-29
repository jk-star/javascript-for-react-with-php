import { add, subtract } from './calculator.js';
import { login, logout, checkUser } from './auth.js';
import user from "./user.js";

document.querySelector('.calculator').innerHTML = `
Add = ${add(20, 3)} <br/>
Subtract = ${subtract(20, 3)} <br/> `;

document.querySelector('.user').innerHTML = `
Name = ${user.name} <br/>
Age = ${user.age} <br/>
City = ${user.city} <br/>
Email = ${user.email} <br/>
Active = ${user.isActive} <br/> `

document.querySelector('.login').innerHTML = checkUser('jyoti');