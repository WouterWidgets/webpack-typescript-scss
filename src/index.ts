import { User } from './models/user';
import * as _ from 'lodash';
import * as $ from 'jquery'
import 'bootstrap';

// Typescript class
const me: User = {
    name: 'John Doe',
    age: 32,
};

// Lodash
_.each(['apple', 'banana', 'orange'], (fruit: string) => {
    console.log('Fruit:', fruit);
});

// ES6 string interpolation
console.log(`Hi ${me.name}!`);

// jQuery
$('#foobar').html(`Hi ${me.name}!`);
