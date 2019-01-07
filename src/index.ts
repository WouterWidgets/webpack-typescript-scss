import { User } from './models/user';
import * as _ from 'lodash';
import * as $ from 'jquery'

// Typescript class
const me: User = {
    name: 'John Doe',
    age: 32,
};

// ES6 string interpolation
console.log(`Hi ${me.name}!`);

// Lodash
_.each(['apple', 'banana', 'orange'], (fruit: string) => {
    console.log('Fruit', fruit);
});

// jQuery
$('#foobar').html(`Hi ${me.name}!`);
