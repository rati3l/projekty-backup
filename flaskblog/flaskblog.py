from flask import Flask, render_template

app = Flask(__name__)

posts = [
	{
		'autor': 'Marcin',
		'tytul': 'post 1',
		'tresc': 'lorem ipsum',
		'data': '20-07-2018'
	},
	
	{
		'autor': 'Basia',
		'tytul': 'post 2',
		'tresc': 'dolor sit amet',
		'data': '20-07-2018'
	}

]


@app.route("/")
@app.route("/home")

def home():
	return render_template('home.html', posts = posts)

@app.route("/about")

def about():
	return render_template('about.html', title ='about')


if __name__ == "__main__":
	app.run(debug=True)