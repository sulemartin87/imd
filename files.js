const testFolder = './Projects/';
const fs = require('fs');
var util = require('util');
let files = [];
fs.readdirSync(testFolder).forEach(file => {
    let project = {};
    let images = [];
    project.name = file;
    try {
        fs.readdirSync('./Projects/'+file+'/images/').forEach(imgs => {
            try {
                if(imgs.match('thumbnail.jpg')) {
                    project.thumbnail = imgs;
                }
                images.push(imgs);
            }catch(e) {
    
            }
        });
    }catch(e) {

    }
    project.images = images;
    files.push(project);
});
files = JSON.stringify(files);
fs.writeFileSync('./data.json', util.inspect(files) , 'utf-8');
 