let saya = 
    {
      name: "Robby Takdirillah",
      age: 21,
      address: "Sukabumi",
      hobbies: ["Reading, Coding, Travelling"],
      is_married: false,
      list_school: [
        {
        	name:"SDN Jelegong",
        	year_in: 2003,
          	year_out: 2009,
          	major: null
        },{
        	name:"SMPN 1 Nagrak",
        	year_in: 2009,
          	year_out: 2012,
          	major: null
        },{
        	name:"SMAN 1 Nagrak",
        	year_in: 2012,
          	year_out: 2015,
          	major: null
        },{
        	name:"Universitas Muhammadiyah Sukabumi",
        	year_in: 2016,
          	year_out: 2021,
          	major: null
        },
     ],
     skills:[
       {
       		skill_name: "Administration Office",
         	level: "expert"
       },	
       {
       		skill_name: "Web Developer",
         	level: "Medium"
       },	
       {
       		skill_name: "Design Graphic",
         	level: "expert"
       },	
       {
       		skill_name: "Public Speaking",
         	level: "expert"
       },	
     ],
     interest_in_coding: true
    };

function get_bio(){
	return saya
}

