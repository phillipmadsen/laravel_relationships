<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Country;

class ArticleController extends Controller 
{
	public function getArticles($article_id) {

		$articles = Article::findOrFail($article_id);

		return view('articles.index')->with('articles', $articles);
	}

	public function getArticleFromCountry($country_id) {

		$country = Country::findOrFail($country_id);

		return view('articles.country_post')->with('country', $country);
	}
}