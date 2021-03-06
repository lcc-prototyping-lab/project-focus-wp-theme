<?php
/*
 *    Copyright (C) 2016 Project Focus Wordpress Theme
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU Affero General Public License as
 *    published by the Free Software Foundation, either version 3 of the
 *    License, or (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
 
if(function_exists("register_field_group")):

register_field_group(array (
  'id' => 'group_57ed2dcd7f201',
  'title' => 'Project',
  'fields' => array (
    array (
      'key' => 'field_57ed2ddaa05ca',
      'label' => 'Project',
      'name' => 'project',
      'instructions' => 'Select one or multiple projects to associate with this post. If you want you can create a \'Personal\' or \'Research\' project for work that does not fit into an official project. ',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'type' => 'taxonomy',
      'required' => 1,
      'taxonomy' => 'project',
      'field_type' => 'multi_select',
      'allow_null' => 0,
      'load_save_terms' => 1,
      'return_format' => 'id',
      'multiple' => 0,
    ),
    array (
      'key' => 'field_57ed2e16a05cb',
      'label' => 'Post Image',
      'name' => 'project_image',
      'type' => 'image',
      'instructions' => 'This image will be the main representation for this post so make it decent quality & resolution. It will appear in a few different crops in different places: small for home or section pages & large for full article page). You can edit the image crops through Wordpress using the \'Edit Crop Formats\' link. ',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'id',
      'preview_size' => 'small',
      'library' => 'all',
      'min_width' => 1000,
      'min_height' => 750,
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
      ),
    ),
  ),
	'menu_order' => 0,
	'options' => array(
		'position' => 'acf_after_title',
		'layout' => 'no_box',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'custom_fields',
			1 => 'revisions',
			2 => 'author',
			3 => 'format',
			4 => 'page_attributes',
			5 => 'featured_image',
			6 => 'categories',
			7 => 'tags',
			8 => 'send-trackbacks',
		),
		'active' => 1,
		'description' => '',
	)
));

endif;
