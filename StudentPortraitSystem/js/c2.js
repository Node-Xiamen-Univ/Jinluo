var data = [	
			{"课程名":"高等数学","成绩":90},
			{"课程名":"大学英语","成绩":80},
			{"课程名":"大学语文","成绩":85},
			{"课程名":"大学物理","成绩":90},
			{"课程名":"线性代数","成绩":87},
			{"课程名":"体育课","成绩":86}
		];
		var chart = new G2.Chart({
			id: "c2",
			width: 400,
			height: 300,
			forceFit: true
		});
		chart.source(data);
		chart.col("成绩",{ 
		    type: 'linear',
			min: 0
		});
		chart.interval().position('课程名*成绩').color('课程名'); 
		chart.render();
		var global = G2.Global;
		    global.setTheme('dark');
		
		