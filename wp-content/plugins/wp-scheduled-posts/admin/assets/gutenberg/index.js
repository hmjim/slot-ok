/**
 * WordPress dependencies
 */
const { compose, ifCondition, withInstanceId } = wp.compose;
const { withSelect, withDispatch } = wp.data;
const { PluginPostStatusInfo } = wp.editPost;
const { Component, createElement } = wp.element;
const { publishImmediately, currentTime, publish_button_off, allowedPostTypes } = WPSchedulePostsFree;
import PublishButton from './publish-button';

class AdminPublishButton extends Component {
	constructor(props) {
		super(props)
	}

	render() {

		if( publish_button_off == '' ) {
			return '';
		}

		return (
			<PluginPostStatusInfo>
				<PublishButton { ...this.props } currentTime={currentTime} publish={ publishImmediately } />
			</PluginPostStatusInfo>
		);
	}
}

export default compose( [
	withSelect( ( select ) => {
		const {
			getCurrentPostType,
			getEditedPostAttribute,
			isCurrentPostScheduled,
			isCurrentPostPublished,
			getCurrentPost
		} = select( 'core/editor' );

		return {
			postType: getCurrentPostType(),
			meta: getEditedPostAttribute( 'meta' ),
			isScheduled: isCurrentPostScheduled(),
			isPublished: isCurrentPostPublished(),
			post: getCurrentPost(),
		};
	} ),
	withDispatch( ( dispatch, { meta } ) => {
		const { editPost } = dispatch( 'core/editor' );
		return {
			editPost( newMeta ) {
				var new_date = JSON.parse( newMeta );
				if( typeof new_date === 'string' ) {
					new_date = JSON.parse( new_date );
				}
				editPost( { date: new_date.date, date_gmt: new_date.date_gmt, status: new_date.status } );
			},
		};

	} ),
	ifCondition( ( { postType } ) => {
		if(allowedPostTypes.includes( postType ) !== false){
			return true;
		} else {
			return false;
		}
	} ),
] )( AdminPublishButton );