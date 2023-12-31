import pathNames from "../const/pathNames";
import el from "../const/elements";

export function initLoader() {
    const { fetch: originalFetch } = window;
    window.fetch = async (url, options = {}) => {
        el.loader.style.display = 'flex';
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        options.headers
            ? options.headers['X-CSRF-TOKEN'] = token
            : options = {
                ...options,
                headers: {
                    'X-CSRF-TOKEN': token
                }
            };
        const response = await originalFetch(url, options);
        el.loader.style.display = 'none';
        return response;
    };
}

export default async function request(
    method,
    path,
    data,
    evalResult = true,
) {
    let payLoad;
    
    if (method !== 'GET') payLoad = {
        method,
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data),
    };

    const routePostfix = await getPostfix(method, data);

    const response = await fetch(`${pathNames.API}${path}${routePostfix}`, payLoad);

    let result;
    if (evalResult) result = await response.json();

    return evalResult ? result : response;
}

async function getPostfix(method, data) {
    let postfix = '';
    if (data && method === 'GET') {
        const params = new URLSearchParams();
        Object.keys(data).forEach(key => {
            params.append(key, data[key]);
        });
        postfix = `?${params.toString()}`;
    }
    return postfix;
}

export async function get(path, data) {
    return await request('GET', path, data);
}

export async function post(path, data) {
    return await request('POST', path, data);
}

export async function put(path, data) {
    return await request('PUT', path, data);
}

export async function del(path, data) {
    return await request('DELETE', path, data);
}