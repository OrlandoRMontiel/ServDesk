

/****************************************************************************
 *  Nav Panel Service
 ********************************************/

var NavPanel = function() {    
    
    var sections = [
        { name: "Alertas", 				icon: 'warning'	},
        { name: "Requerimiento", 		icon: 'list'	},
        { name: "Reportes", 			icon: 'show_chart'	},
        { name: "Alta Cliente",			icon: 'person_add'	},
        { name: "Alta Agente",			icon: 'person_add'	}
    ];

    var currentSection = 0;
 
    this.addSection = function(obj){  
        sections.push(obj);
    }

    this.reset = function(){
        currentSection = 0;
        sections = sections = [
            { name: "Alertas", 				icon: 'warning'	},
            { name: "Requerimiento", 		icon: 'list'	},
            { name: "Reportes", 			icon: 'show_chart'	},
            { name: "Alta",			 		icon: 'person_add'	} 
        ];
    }

    this.getSections = function(){
        return sections;
    } 

    this.getCurrentSection = function(cs){
        return currentSection;
    }

    this.setCurrentSection = function(cs){
        currentSection = cs;
    }
}

angular.module('app').service('NavPanel', NavPanel); 