<?php

return [
	'About'						=> 'About',
	'ABR'						=> 'ABR',
	'Actions'					=> '{0, plural, one {Action}, other {Actions} }',
	'AddLinks'					=> 'Add links',
	'AddNewLinks'				=> 'Add new links',
	'Admin'						=> 'Admin',
	'Administration'			=> 'Administration',
	'Administrator'				=> 'Administrator',
	'AdministratorDesc'			=> 'Administrator is a super user in charge of setting up this server.',
	'AgeLimit'					=> 'Age limit',
	'AppSettings'				=> 'App settings',
	'AreYouSure'				=> 'Are your sure?',
	'AreYouSureDesc'			=> 'Are you sure you want to perform the following action',
	'AudioCodec'				=> 'Audio codec',
	'AudioStreamWith'			=> 'Contains an audio stream',
	'AudioStreamWithout'		=> 'No audio stream',
	'Categories'				=> 'Categories',
	'Close'						=> 'Close',
	'Colon'						=> ':',
	'Confirm'					=> 'Confirm',
	'Creator'					=> 'Creator',
	'Credits'					=> 'Credits',
	'CommonErrorsToCheck'		=> 'Common errors to check',
	'DebugLevel'				=> 'Debug level',
	'DebugLevelDesc'			=> 'Verbosity level of debug informations.',
	'DefaultQuality'			=> 'Default quality',
	'DefaultQualityDesc'		=> 'Default quality selected value when adding links.',
	'DefaultStream'				=> 'Default stream',
	'DefaultStreamDesc'			=> 'Default stream selected value when adding links.',
	'DeleteDownload'			=> 'Delete Download',
	'DeleteThisDownload'		=> 'Delete download with title \'{0}\' and format \'{1}\'',
	'Description'				=> 'Description',
	'DislikeCount'				=> 'Dislike count',
	'DownloadRequestSummary'	=> 'Download request summary',
	'Download'					=> 'Download',
	'Downloads'					=> '{ 0, plural, zero {0 download}, one {1 download}, other {# downloads} }',
	'DownloadsLimit'			=> '{ 0, plural, zero {No limit}, one {1 download}, other {# downloads} }',
	'Downloader'				=> 'Downloader',
	'DownloadFilters'			=> [
		\App\Controllers\Downloads::Filter_all		=> 'All',
		\App\Controllers\Downloads::Filter_active	=> 'Active only',
		\App\Controllers\Downloads::Filter_inactive	=> 'Inactive only'
	],
	'Downloading'				=> 'Downloading',
	'DownloadLink'				=> 'Download Link',
	'DownloadModalHelp'			=> 'To download',
	'DownloadModalSteps'		=> [
		'Click on suggested file name field above',
		'Copy the content (CTRL+C or right-click > copy)',
		'Right-click on the "Download" button and choose "Save target as..."',
		'Paste the suggested filename previously copied (CTRL+V or right-click > paste)',
		'Download!'
	],
	'DownloadPath'				=> 'Download path',
	'DownloadPathDesc'			=> 'Path on this server where media will be downloaded to.',
	'DownloadSettings'			=> 'Download settings',
	'DownloadToComputer'		=> 'Download to your computer',
	'DownloadToServer'			=> 'Download to server',
	'DownloadState'				=> [
		\App\Models\Objects\Download::State_Pending		=> 'Pending',
		\App\Models\Objects\Download::State_Downloading	=> 'Downloading',
		\App\Models\Objects\Download::State_Finished	=> 'Finished',
		\App\Models\Objects\Download::State_Error		=> 'Error',
		\App\Models\Objects\Download::State_Paused		=> 'Paused',
	],
	'Duration'					=> 'Duration',
	'EnableCache'				=> 'Enable cache',
	'EnableCacheDesc'			=> 'Enable server caching system.',
	'Error'						=> 'Error',
	'ErrorDetail'				=> 'Error detail',
	'ETA'						=> 'ETA',
	'Extension'					=> 'Extension',
	'Filesize'					=> 'Filesize',
	'Filters'					=> 'Filters',
	'Format'					=> 'Format',
	'FormatQuality'				=> [
		\App\Lib\YoutubeDl::QUALITY_BEST		=> 'Best',
		\App\Lib\YoutubeDl::QUALITY_BEST_EVER	=> 'Best ever',
		\App\Lib\YoutubeDl::QUALITY_WORST		=> 'Worst',
		\App\Lib\YoutubeDl::QUALITY_MANUAL		=> 'Manual'
	],
	'FormatStream'				=> [
		\App\Lib\YoutubeDl::STREAM_BOTH		=> 'Audio and Video',
		\App\Lib\YoutubeDl::STREAM_AUDIO	=> 'Audio only',
		\App\Lib\YoutubeDl::STREAM_VIDEO	=> 'Video only'
	],
	'FPS'						=> 'FPS',
	'FreeSpace'					=> 'Free space',
	'FrontEnd'					=> 'Front end',
	'GoTo'						=> 'Go to {0}',
	'Help'						=> 'Help',
	'Host'						=> 'Host',
	'HowToAddLinks'				=> 'How does it work?',
	'HowToAddLinksSteps'		=> [
		'Paste your video link(s) in the text area',
		'Adjust options',
		'Click on then {0} button'
	],
	'HowToDirectDownload'		=> 'How can I download a video directly to my computer?',
	'HowToDirectDownloadSteps'	=> [
		'Paste your video link(s) in the text area',
		'Set "{0}" option to "{1}"',
		'Click on the {0} button',
		'Click on the {0} button on the wanted format line'
	],
	'Install'					=> 'Install',
	'Installation'				=> 'Installation',
	'Language'					=> 'Language',
	'LanguageDesc'				=> 'Language to use with this application.',
	'License'					=> 'License',
	'LikeCount'					=> 'Like count',
	'Login'						=> 'Login',
	'LoginFailed'				=> 'Invalid login/password combination',
	'Logout'					=> 'Logout',
	'Maintainer'				=> 'Maintainer',
	'MaximumConcurrents'		=> 'Maximum concurrents',
	'MaximumConcurrentsDesc'	=> 'Maximal limit of downloads with same origin. Set to 0 to disable this limit.',
	'MaximumSimultaneous'		=> 'Maximum simultaneous',
	'MaximumSimultaneousDesc'	=> 'Maximal limit of simultaneous downloads. Set to 0 to disable this limit.',
	'MaxConcurrents'			=> 'Max. concurrents',
	'MaxSimultaneous'			=> 'Max. simultaneous',
	'MediaList'					=> 'Media list',
	'Name'						=> 'Name',
	'NextMedia'					=> 'Next media',
	'NoImage'					=> 'No image',
	'NoMediaInfo'				=> 'No media informations',
	'NoMediaInfoDesc'			=> 'Unable to load informations for url',
	'NoMediaInfoErrors'			=> [
		'typo in url',
		'server has no internet access',
		'youtube-dl does not support this provider',
		'provider is down or blacklisted your server'
	],
	'NoDownload'				=> 'Gloops, nothing to download!',
	'Options'					=> 'Options',
	'Password'					=> 'Password',
	'PasswordConfirmation'		=> 'Password confirmation',
	'PauseAllDownloading'		=> 'Pause all downloading',
	'PauseDownload'				=> 'Pause Download',
	'PHPFramework'				=> 'PHP Framework',
	'PHPLibraries'				=> 'PHP Libraries',
	'PreviousMedia'				=> 'Previous media',
	'Progression'				=> 'Progression',
	'ProjectPage'				=> 'Project page',
	'Quality'					=> 'Quality',
	'Requirements'				=> 'Requirements',
	'RemoveAllFinished'			=> 'Remove all finished',
	'Reset'						=> 'Reset',
	'Resolution'				=> 'Resolution',
	'ResumeDownload'			=> 'Resume Download',
	'RetryDownload'				=> 'Retry Download',
	'Save'						=> 'Save',
	'SelectFormat'				=> 'Select formats to download',
	'ServerInfos'				=> 'Server infos',
	'ServerSettings'			=> 'Server settings',
	'SignIn'					=> 'Sign in',
	'Speed'						=> 'Speed',
	'State'						=> 'State',
	'Status'					=> 'Status',
	'Stream'					=> 'Stream',
	'SuggestedFileName'			=> 'Suggested file name',
	'SupportedLangTitle'		=> 'Which languages are supported?',
	'SupportedLangInfo'			=> 'Currently, only english is supported.',
	'SupportedSitesTitle'		=> 'With which sites does it work?',
	'SupportedSitesInfo'		=> '{0}Here\'s{1} a list of the supported sites.',
	'TBR'						=> 'TBR',
	'Thumbnail'					=> 'Thumbnail',
	'Title'						=> 'Title',
	'Type'						=> 'Type',
	'UploadDate'				=> 'Upload date',
	'Uploader'					=> 'Uploader',
	'URL'						=> 'URL',
	'Value'						=> 'Value',
	'ValidationFailed'			=> 'Validation failed with theses messages',
	'Version'					=> 'Version',
	'VideoCodec'				=> 'Video codec',
	'VideoLinks'				=> 'Video links',
	'VideoLinksPlaceholder'		=> 'One URL per line',
	'VideoStreamWith'			=> 'Contains a video stream',
	'VideoStreamWithout'		=> 'No video stream',
	'ViewCount'					=> 'View count',
	'YoutubedlExtraArgs'		=> 'Youtube-dl extra arguments',
	'YoutubedlExtraArgsDesc'	=> 'Extra arguments added to Youtube-dl download command.',
	'YoutubedlPath'				=> 'Youtube-dl path',
	'YoutubedlPathDesc'			=> 'Path to Youtube-dl binary.',
	'YoutubedlSettings'			=> 'Youtube-dl settings',
];