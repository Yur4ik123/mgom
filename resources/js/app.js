import UIkit from 'uikit';
import axios from "axios";
import './charts'
let coll = document.getElementsByClassName("collapsible");
let i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        event.preventDefault();
        this.classList.toggle("active");
        let content = this.nextElementSibling;
        if (content.style.maxHeight){
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}
if (document.getElementById('sec-items-wrapper')) {
    axios.get('https://data.sec.gov/submissions/CIK0001697412.json').then(res => {
        console.log(res.data.filings.recent);
        let recent = res.data.filings.recent || [];
        let arr = [];
        console.log(recent);
        recent.isXBRL.forEach(function (elem, idx) {
            if (elem == 1) {
                arr.push({
                    number: recent.accessionNumber[idx],
                    date: recent.filingDate[idx],
                    form:recent.form[idx],
                    description: recent.primaryDocDescription[idx],
                    doc:recent.primaryDocument[idx],
                    url:'https://www.sec.gov/ix?doc=/Archives/edgar/data/'+res.data.cik+'/'+recent.accessionNumber[idx].replaceAll('-', '')+'/'+recent.primaryDocument[idx],
                })
            }
        });
        let html = '';
        arr.forEach(function(elem, idx){
            html+='            <div class="table__row">\n' +
                '                <div class="col">'+elem.date+'</div>\n' +
                '                <div class="col">'+elem.form+'</div>\n' +
                '                <div class="col">'+elem.description+'</div>\n' +
                '                <div class="col">                    <a href="'+elem.url+'" target="_blank"><img src="/assets/img/link.svg" width="20" height="20" alt=""></a>\n' +
                '                </div>\n' +
                '            </div>';
        });
        document.querySelector('#sec-table-list').innerHTML = html;
    })
}
