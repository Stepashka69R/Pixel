<?php
/*
* SiteSEO
* https://siteseo.io/
* (c) SiteSEO Team <support@siteseo.io>
*/

/*
Copyright 2016 - 2024 - Benjamin Denis  (email : contact@seopress.org)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

namespace SiteSEO\Services\ContentAnalysis;

defined('ABSPATH') or exit('Cheatin&#8217; uh?');

class RenderContentAnalysis {
	public function render($analyzes, $analysis_data, $echo = true) {
		$html = '<div id="siteseo-analysis-tabs">
			<div id="siteseo-analysis-tabs-1">
				<div class="analysis-score">';
				
					$impact = array_unique(array_values(wp_list_pluck($analyzes, 'impact')));
					$svg = '<svg role="img" aria-hidden="true" focusable="false" width="100%" height="100%" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
								<circle r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
								<circle id="bar" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
							</svg>';
					$tooltip = siteseo_tooltip(__('Content analysis', 'siteseo'), __('<strong>Should be improved:</strong> red or orange dots <br> <strong>Good:</strong> yellow or green dots', 'siteseo'), '');
		
		$acceptable_svg = [
			'svg' => [
				'role' => true,
				'aria-hidden' => true,
				'focusable' => true,
				'width' => true,
				'height' => true,
				'viewbox' => true,
				'version' => true,
				'xmlns' => true
			],
			'circle' => [
				'id' => true,
				'r' => true,
				'cx' => true,
				'cy' => true,
				'fill' => true,
				'stroke-dasharray' => true,
				'stroke-dashoffset' => true
			]
		];

		if(!empty($impact)){
			if (in_array('medium', $impact) || in_array('high', $impact)) {
				$score = false;
				$html .= '<p class="notgood">'.wp_kses($svg, $acceptable_svg).' <span>'. esc_html__('Should be improved', 'siteseo') . wp_kses_post($tooltip).'</span></p>';
			} else {
				$score = true;
				$html .= '<p class="good">'.wp_kses($svg, $acceptable_svg).' <span>'. esc_html__('Good', 'siteseo') . wp_kses_post($tooltip).'</span></p>';
			}
		} else {
			$score = false;
		}

		if(!empty($analysis_data) && is_array($analysis_data)){
			$analysis_data['score'] = $score;
			update_post_meta(get_the_ID(), '_siteseo_analysis_data', $analysis_data);
		}
				$html .= '<span><a href="#" id="expand-all">'.esc_html__('Expand', 'siteseo').'</a> / <a href="#" id="close-all">'.esc_html__('Close', 'siteseo').'</a></span>
				</div><!-- .analysis-score -->';

				if ( ! empty($analyzes)) {
					$order = [
						'1' => 'high',
						'2' => 'medium',
						'3' => 'low',
						'4' => 'good',
					];

					usort($analyzes, function ($a, $b) use ($order) {
						$pos_a = array_search($a['impact'], $order);
						$pos_b = array_search($b['impact'], $order);

						return $pos_a - $pos_b;
					});

					foreach ($analyzes as $key => $value) {
						
						$html .= '<div class="gr-analysis">';
							if (isset($value['title'])) {
								$html .= '<div class="gr-analysis-title">
									<h3>
										<button type="button" aria-expanded="false" class="btn-toggle">';
											if(isset($value['impact'])){
												$html .= '<span class="impact '.esc_attr($value['impact']).'" aria-hidden="true"></span>
												<span class="screen-reader-text">'. sprintf(esc_html__('Degree of severity: %s','siteseo'), esc_html($value['impact'])).'</span>';
											}
											$html .= '<span class="siteseo-arrow" aria-hidden="true"></span>
											'.esc_html($value['title']).'
										</button>
									</h3>
								</div>';
							}
							if(isset($value['desc'])){
								$html .= '<div class="gr-analysis-content" aria-hidden="true">'.wp_kses_post($value['desc']).'</div>';
							}
						$html .= '</div><!-- .gr-analysis -->';
					}
				}
				$html .= '</div><!-- #siteseo-analysis-tabs-1 -->
			</div><!-- #siteseo-analysis-tabs -->';
			
			if(!empty($echo)){
				$allowed_html = wp_kses_allowed_html('post');
				$allowed_html = array_merge($allowed_html, $acceptable_svg);

				echo wp_kses($html, $allowed_html);
				return;
			}
			
			return $html;
	}
}
