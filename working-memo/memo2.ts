import type { MockedRequest, ResponseResolver, restContext } from 'msw';
import { wait } from '~/mocks/helper/wait';
import { icrDetail } from '~/mocks/response/icrDetail';
import { errorResponse } from '~/mocks/response/error';
import { errorCheck } from '~/mocks/helper/errorCheck';

const get: ResponseResolver<MockedRequest, typeof restContext> = async (req, res, ctx) => {
  await wait();
  if (errorCheck(req)) {
    return res(ctx.status(errorResponse.statusCode), ctx.json(errorResponse.body));
  }
  return res(ctx.status(200), ctx.json(icrDetail));
};

const patch: ResponseResolver<MockedRequest, typeof restContext> = async (req, res, ctx) => {
//ここになんて書くのかわからない。
};

export default { get, patch };