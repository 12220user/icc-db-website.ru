class CookieError {
	toString() {
		return 'Cookie don\'t exist!';
	}
}

class Base64 {
	static encode(string) {
		return btoa(unescape(encodeURIComponent(string)));
	}
	
	static decode(string) {
		return decodeURIComponent(escape(atob(string)));
	}
}

class Cookie {
	static set(name, value, expires=null) {
		expires = expires === null ? '' : new Date(Date.now() + expires * 1000).toGMTString();
		document.cookie = 
		`${name}=${Base64.encode(value)}; ` +
		`expires=${expires}; ` +
		`path=/; `;
	}
	
	static get(name) {
		try {
			var value = document.cookie.split('; ').find(row => row.startsWith(name)).split('=')[1];
			return Base64.decode(value);
		} catch (error) {
			if (error instanceof TypeError) {
				throw new CookieError();
			}
		}
	}
	
	static remove(name) {
		Cookie.set(name, null, 0);
	}
}