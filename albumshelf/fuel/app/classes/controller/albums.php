<?php

class Controller_Albums extends Controller_Template
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{ 

		$albums = Model_Album::find('all');
        $data = array('albums' => $albums);
        $this->template->title = 'MyAlbums';
        $this->template->content = View::forge('albums/index', $data);
       }

	public function action_add()
	{

       if(Input::post('send')){

        $album = new Model_Album();
        $album -> artist = Input::post('artist');
        $album ->title = Input::post('title');
        $album -> genre = Input::post('genre');
        $album-> year_released = Input::post('year_released');
        $album -> label = Input::post('label');
        $album -> cover_url = Input::post('cover_url');
        $album -> details = Input::post('details');
        $album->save();

        Session::set_flash('success' , 'Album Added');

        Response::redirect('/albums');
       }


       $data = array();
        $this->template->title = 'MyAlbums';
        $this->template->content = View::forge('albums/add', $data);
       }

 

   public function action_view($id)
	{
		$album = Model_Album::find('first' , array(

             'where' => array(
                'id' => $id
              	)
			));
        $data = array('album' => $album);
        $this->template->title = 'MyAlbums';
        $this->template->content = View::forge('albums/view', $data);
       }

public function action_edit($id)
	{
         if(Input::post('send')) {
		 $album = Model_Album::find(Input::post('album_id'));
        $album -> artist = Input::post('artist');
        $album -> title = Input::post('title');
        $album -> genre = Input::post('genre');
        $album-> year_released = Input::post('year_released');
        $album -> label = Input::post('label');
        $album -> cover_url = Input::post('cover_url');
        $album -> details = Input::post('details');
        $album->save();

        Session::set_flash('success' , 'Album Updated');

        Response::redirect('/albums');
       
    }

        $album = Model_Album::find('first' , array(

             'where' => array(
                'id' => $id
              	)
			));

        $data = array('album' => $album);
        $this->template->title = 'Edit Album';
        $this->template->content = View::forge('albums/edit', $data);
       }
 

       public function action_delete($id)
	{

     $album = Model_Album::find($id);
     $album->delete();
     Session::set_flash('success' , 'Album Deleted');

        Response::redirect('/albums');
       }

}
