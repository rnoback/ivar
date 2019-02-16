/**
 * Responsive breakpoint registry
 */
let docWidth;
const BREAKPOINT_SMALL = 480;
const BREAKPOINT_MEDIUM = 768;
const BREAKPOINT_LARGE = 992;
const BREAKPOINT_EXTRA_LARGE = 1280;

export const getDocWidth = () => {
	return window.innerWidth;
};

export const equalOrLargerThanBreakpoint = breakpoint => {
	switch (breakpoint) {
		case "small":
			return getDocWidth() >= BREAKPOINT_SMALL;
		case "medium":
			return getDocWidth() >= BREAKPOINT_MEDIUM;
		case "large":
			return getDocWidth() >= BREAKPOINT_LARGE;
		case "extraLarge":
			return getDocWidth() >= BREAKPOINT_EXTRA_LARGE;
		default:
			return false;
	}
};

export const smallerThanBreakpoint = breakpoint => {
	switch (breakpoint) {
		case "small":
			return getDocWidth() < BREAKPOINT_SMALL;
		case "medium":
			return getDocWidth() < BREAKPOINT_MEDIUM;
		case "large":
			return getDocWidth() < BREAKPOINT_LARGE;
		case "extraLarge":
			return getDocWidth() < BREAKPOINT_EXTRA_LARGE;
		default:
			return false;
	}
};

export const isMobile = () => {
	return !equalOrLargerThanBreakpoint("medium");
};

export const getBreakpointSmall = () => BREAKPOINT_SMALL;
export const getBreakpointMedium = () => BREAKPOINT_MEDIUM;
export const getBreakpointLarge = () => BREAKPOINT_LARGE;
export const getBreakpointExtraLarge = () => BREAKPOINT_EXTRA_LARGE;

export const getCurrentBreakpoint = () => {
	const tries = ["small", "medium", "large", "extraLarge"];
	let i = 0;
	let bp = "small";

	do {
		bp = tries[i];
	} while (equalOrLargerThanBreakpoint(tries[++i]));
	return bp;
};
