				<tr>
					<th scope="row" colspan="2"><h3><?php _e('Behavior', 'fg-joomla-to-wordpress'); ?></h3></th>
				</tr>
				<tr>
					<th scope="row"><?php _e('Import introtext:', 'fg-joomla-to-wordpress'); ?></th>
					<td>
						<input id="introtext_in_excerpt" name="introtext" type="radio" value="in_excerpt" <?php checked($data['introtext'], 'in_excerpt'); ?> /> <label for="introtext_in_excerpt" title="<?php _e("The text before the «Read more» split will be imported into the excerpt.", 'fg-joomla-to-wordpress'); ?>"><?php _e('to the excerpt', 'fg-joomla-to-wordpress'); ?></label>&nbsp;&nbsp;
						<input id="introtext_in_content" name="introtext" type="radio" value="in_content" <?php checked($data['introtext'], 'in_content'); ?> /> <label for="introtext_in_content" title="<?php _e("The text before the «Read more» split will be imported into the post content with a «read more» link.", 'fg-joomla-to-wordpress'); ?>"><?php _e('to the content', 'fg-joomla-to-wordpress'); ?></label>&nbsp;&nbsp;
						<input id="introtext_in_excerpt_and_content" name="introtext" type="radio" value="in_excerpt_and_content" <?php checked($data['introtext'], 'in_excerpt_and_content'); ?> /> <label for="introtext_in_excerpt_and_content" title="<?php _e("The text before the «Read more» split will be imported into both the excerpt and the post content.", 'fg-joomla-to-wordpress'); ?>"><?php _e('to both', 'fg-joomla-to-wordpress'); ?></label>
					</td>
				</tr>
				<tr>
					<th scope="row"><?php _e('Archived posts:', 'fg-joomla-to-wordpress'); ?></th>
					<td>
						<input id="archived_posts_not_imported" name="archived_posts" type="radio" value="not_imported" <?php checked($data['archived_posts'], 'not_imported'); ?> /> <label for="archived_posts_not_imported" title="<?php _e("Do not import archived posts", 'fg-joomla-to-wordpress'); ?>"><?php _e('Not imported', 'fg-joomla-to-wordpress'); ?></label>&nbsp;&nbsp;
						<input id="archived_posts_drafts" name="archived_posts" type="radio" value="drafts" <?php checked($data['archived_posts'], 'drafts'); ?> /> <label for="archived_posts_drafts" title="<?php _e("Import archived posts as drafts", 'fg-joomla-to-wordpress'); ?>"><?php _e('Import as drafts', 'fg-joomla-to-wordpress'); ?></label>&nbsp;&nbsp;
						<input id="archived_posts_published" name="archived_posts" type="radio" value="published" <?php checked($data['archived_posts'], 'published'); ?> /> <label for="archived_posts_published" title="<?php _e("Import archived posts as published posts", 'fg-joomla-to-wordpress'); ?>"><?php _e('Import as published posts', 'fg-joomla-to-wordpress'); ?></label>
					</td>
				</tr>
				<tr>
					<th scope="row"><?php _e('Medias:', 'fg-joomla-to-wordpress'); ?></th>
					<td><input id="skip_media" name="skip_media" type="checkbox" value="1" <?php checked($data['skip_media'], 1); ?> /> <label for="skip_media" ><?php _e('Skip media', 'fg-joomla-to-wordpress'); ?></label>
					<br />
					<div id="media_import_box">
						<?php _e('Import first image:', 'fg-joomla-to-wordpress'); ?>&nbsp;
						<input id="first_image_as_is" name="first_image" type="radio" value="as_is" <?php checked($data['first_image'], 'as_is'); ?> /> <label for="first_image_as_is" title="<?php _e('The first image will be kept in the post content', 'fg-joomla-to-wordpress'); ?>"><?php _e('as is', 'fg-joomla-to-wordpress'); ?></label>&nbsp;&nbsp;
						<input id="first_image_as_featured" name="first_image" type="radio" value="as_featured" <?php checked($data['first_image'], 'as_featured'); ?> /> <label for="first_image_as_featured" title="<?php _e('The first image will be removed from the post content and imported as the featured image only', 'fg-joomla-to-wordpress'); ?>"><?php _e('as featured only', 'fg-joomla-to-wordpress'); ?></label>&nbsp;&nbsp;
						<input id="first_image_as_is_and_featured" name="first_image" type="radio" value="as_is_and_featured" <?php checked($data['first_image'], 'as_is_and_featured'); ?> /> <label for="first_image_as_is_and_featured" title="<?php _e('The first image will be kept in the post content and imported as the featured image', 'fg-joomla-to-wordpress'); ?>"><?php _e('as is and as featured', 'fg-joomla-to-wordpress'); ?></label>
						<br />
						<input id="import_external" name="import_external" type="checkbox" value="1" <?php checked($data['import_external'], 1); ?> /> <label for="import_external"><?php _e('Import external media', 'fg-joomla-to-wordpress'); ?></label>
						<br />
						<input id="import_duplicates" name="import_duplicates" type="checkbox" value="1" <?php checked($data['import_duplicates'], 1); ?> /> <label for="import_duplicates" title="<?php _e('Checked: download the media with their full path in order to import media with identical names.', 'fg-joomla-to-wordpress'); ?>"><?php _e('Import media with duplicate names', 'fg-joomla-to-wordpress'); ?></label>
						<br />
						<input id="force_media_import" name="force_media_import" type="checkbox" value="1" <?php checked($data['force_media_import'], 1); ?> /> <label for="force_media_import" title="<?php _e('Checked: download the media even if it has already been imported. Unchecked: Download only media which were not already imported.', 'fg-joomla-to-wordpress'); ?>" ><?php _e('Force media import. Keep unchecked except if you had previously some media download issues.', 'fg-joomla-to-wordpress'); ?></label>
						<br />
						<?php _e('Timeout for each media:', 'fg-joomla-to-wordpress'); ?>&nbsp;
						<input id="timeout" name="timeout" type="text" size="5" value="<?php echo $data['timeout']; ?>" /> <?php _e('seconds', 'fg-joomla-to-wordpress'); ?>
					</div></td>
				</tr>
				<tr>
					<th scope="row"><?php _e('Meta keywords:', 'fg-joomla-to-wordpress'); ?></th>
					<td><input id="meta_keywords_in_tags" name="meta_keywords_in_tags" type="checkbox" value="1" <?php checked($data['meta_keywords_in_tags'], 1); ?> /> <label for="meta_keywords_in_tags" ><?php _e('Import meta keywords as tags', 'fg-joomla-to-wordpress'); ?></label></td>
				</tr>
				<tr>
					<th scope="row"><?php _e('Create pages:', 'fg-joomla-to-wordpress'); ?></th>
					<td><input id="import_as_pages" name="import_as_pages" type="checkbox" value="1" <?php checked($data['import_as_pages'], 1); ?> /> <label for="import_as_pages" ><?php _e('Import as pages instead of blog posts (without categories)', 'fg-joomla-to-wordpress'); ?></label></td>
				</tr>
